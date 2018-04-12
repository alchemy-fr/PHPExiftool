<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool;

use Monolog\Logger;
use Monolog\Handler\NullHandler;
use Silex\Application;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class PHPExiftoolServiceProvider implements ServiceProviderInterface
{

    public function register(Container $app)
    {
        $app['exiftool.logger'] = function() {
            $logger = new Logger('Exiftool Logger');
            $logger->pushHandler(new NullHandler());

            return $logger;
        };

        $app['exiftool.processor'] = function(Application $app) {
            return new Exiftool($app['exiftool.logger']);
        };

        $app['exiftool.reader'] = function(Application $app) {
            return new Reader($app['exiftool.processor'], new RDFParser());
        };

        $app['exiftool.writer'] = function(Application $app) {
            return new Writer($app['exiftool.processor']);
        };

        $app['exiftool.preview-extractor'] = function(Application $app) {
            return new PreviewExtractor($app['exiftool.processor']);
        };
    }
}
