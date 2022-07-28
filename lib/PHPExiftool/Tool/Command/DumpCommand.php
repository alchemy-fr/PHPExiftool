<?php

namespace PHPExiftool\Tool\Command;

use Exception;
use PHPExiftool\Driver\Metadata\Metadata;
use PHPExiftool\PHPExiftool;
use PHPExiftool\Reader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class DumpCommand extends Command
{
    protected InputInterface $input;
    protected OutputInterface $output;

    protected function configure()
    {
        $this
            ->setName('dump')
            ->setDescription('Dump metadata from a file')
            ->addOption('filter', null, InputOption::VALUE_REQUIRED, "Dump only infos for Id's matching this regexp, e.g. \"^(XMP|FILE)\"")
            ->addArgument('file', InputArgument::OPTIONAL, 'The file')
        ;

        return $this;
    }

    /**
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->input = $input;
        $this->output = $output;

        if(is_null($filter = $input->getOption('filter'))) {
            $filter = '';
        }
        $filter = '/' . $filter . '/';
        /**
         * dump the meta from a file
         */
        if($input->getArgument('file')) {

            $logger = new \Symfony\Bridge\Monolog\Logger("PHPExiftool");
            $reader = Reader::create($logger);
            $reader->files($input->getArgument('file'));
            $metadataBag = $reader->files(__FILE__)->first();

            /**
             * @var Metadata $meta
             */
            foreach ($metadataBag as $meta) {
                $tagGroup = $meta->getTagGroup();
                $id = $tagGroup->getId();
                if(preg_match($filter, $id)) {
                    $output->writeln(sprintf("<info>%s</info> (name=\"%s\", phpType=\"%s\") ; %s",
                        $id,
                        $tagGroup->getName(),
                        $tagGroup->getPhpType(),
                        $tagGroup->getDescription('en')
                    ));
                    $output->write($tagGroup->isMulti() ? " multi" : " mono");
                    $output->write($tagGroup->isBinary() ? " binary" : "");
                    $output->write($tagGroup->isWritable() ? " writable" : " read-only");
                    $output->writeln($tagGroup->getMaxLength() !== 0 ? (" maxl=" . $tagGroup->getMaxLength()) : "");

                    $v = $meta->getValue();
                    $output->writeln(sprintf(" value: \"%s\"", $v->asString()));
                }
            }
        }
        else {
            // no file arg ? dump the dictionnary
            foreach(PHPExiftool::getKnownTagGroups() as $tagGroup) {
                if(preg_match($filter, $tagGroup)) {
                    $output->writeln($tagGroup);
                }
            }
        }
        return 0;
    }

}
