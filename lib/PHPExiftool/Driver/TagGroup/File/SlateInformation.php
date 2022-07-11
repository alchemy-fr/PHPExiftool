<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SlateInformation extends AbstractTagGroup
{

  protected string $id = 'File:SlateInformation';

  protected string $name = 'SlateInformation';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Slate Information',
  ];

  protected int $count = 100;

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 106246
       * type : string
       * writable : false
       * count : 100
       * flags : 
       */
      'id' => 'DPX::Main.File:SlateInformation',
      'desc' => [
        'en' => 'Slate Information',
      ],
    ],
  ];

}
