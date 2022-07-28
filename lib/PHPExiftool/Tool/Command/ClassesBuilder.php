<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Tool\Command;

use Exception;
use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPExiftool\Exiftool;
use PHPExiftool\InformationDumper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


/**
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class ClassesBuilder extends Command
{
    protected InputInterface $input;
    protected OutputInterface $output;

    /**
     *
     * @var array
     */
    protected array $classes = [];

    protected function configure()
    {
        $this
            ->setName('classes-builder')
            ->setDescription('Build TagGroup classes from exiftool documentation.')
            ->addOption('with-mwg', '', null, 'Include MWG tags')
            ->addOption("lng", null, InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY, 'Wanted lng(s) for tag(group) descriptions', [])
            ;

        return $this;
    }

    /**
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $start = microtime(true);

        $this->input = $input;
        $this->output = $output;

        $this->output->write('Dumping Exiftool Dictionnary... ');

        $logger = new Logger('Builder');
        $logger->pushHandler(new NullHandler());

        if ($input->getOption('verbose')) {
            $logger->pushHandler(new StreamHandler('php://stdout'));
        }

        $options = [];
        if ($input->getOption('with-mwg')) {
            $options[] = InformationDumper::LISTOPTION_MWG;
        }

        $dumper = new InformationDumper(new Exiftool($logger));
        $dumper->setLogger($logger);

        $dumper->dumpClasses($options, $input->getOption('lng'));

        $this->output->writeln(
            sprintf(
                'Generated in %d seconds (%d Mb)',
                (microtime(true) - $start),
                memory_get_peak_usage() >> 20
            )
        );

        return 0;
    }

}
