<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LabeledText extends AbstractTagGroup
{

  protected string $id = 'RIFF:LabeledText';

  protected string $name = 'LabeledText';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Labeled Text',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Main
       * line : 329015
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Main.RIFF:LabeledText',
      'desc' => [
        'en' => 'Labeled Text',
      ],
    ],
  ];

}
