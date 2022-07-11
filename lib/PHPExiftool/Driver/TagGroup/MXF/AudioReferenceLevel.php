<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioReferenceLevel extends AbstractTagGroup
{

  protected string $id = 'MXF:AudioReferenceLevel';

  protected string $name = 'AudioReferenceLevel';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Reference Level',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168318
       * type : int8s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AudioReferenceLevel',
      'desc' => [
        'en' => 'Audio Reference Level',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 169033
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AudioReferenceLevel',
      'desc' => [
        'en' => 'Audio Reference Level',
      ],
    ],
  ];

}
