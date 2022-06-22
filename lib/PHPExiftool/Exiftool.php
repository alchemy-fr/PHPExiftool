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

use Exception;
use PHPExiftool\Exception\RuntimeException;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Process\Process;

class Exiftool implements LoggerAwareInterface
{
    private LoggerInterface $logger;
    private $binaryPath;

    public function __construct(LoggerInterface $logger, $binaryPath = null)
    {
        $this->logger = $logger;
        $this->binaryPath = $binaryPath;
    }

    /**
     * {@inheritdoc}
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;

        return $this;
    }

    /**
     * Execute a command and return the output
     *
     * @param  array     $command   arguments without executable
     * @param int $timeout
     * @return string
     * @throws Exception
     */
    public function executeCommand(array $command, int $timeout = 60): string
    {
        array_unshift($command, $this->binaryPath ?: self::getBinary());
        $process = new Process($command);
        $process->setTimeout($timeout);

        $this->logger->info(sprintf('Exiftool executes command %s', $process->getCommandLine()));

        $process->run();

        if ( ! $process->isSuccessful()) {
            throw new RuntimeException(sprintf("Command \"%s\"\n%s\nfailed : \"%s\", exitcode %s", join(' ', $command), var_export($command, true), $process->getErrorOutput(), $process->getExitCode()));
        }

        $output = $process->getOutput();

        unset($process);

        return $output;
    }

    /**
     *
     * @return string
     */
    protected static function getBinary(): string
    {
        static $binary = null;

        if ($binary) {
            return $binary;
        }

        $dev = __DIR__ . '/../../vendor/exiftool/exiftool/exiftool';
        $packaged = __DIR__ . '/../../../../exiftool/exiftool/exiftool';

        foreach (array($packaged, $dev) as $location) {

            if (defined('PHP_WINDOWS_VERSION_BUILD')) {
                $location .= '.exe';
            }

            if (is_executable($location)) {
                return $binary = realpath($location);
            }
        }

        throw new RuntimeException('Unable to get exiftool binary');
    }
}
