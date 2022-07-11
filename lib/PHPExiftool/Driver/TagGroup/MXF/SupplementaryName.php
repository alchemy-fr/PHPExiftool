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
class SupplementaryName extends AbstractTagGroup
{

  protected string $id = 'MXF:SupplementaryName';

  protected string $name = 'SupplementaryName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Supplementary Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167922
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SupplementaryName',
      'desc' => [
        'en' => 'Supplementary Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170421
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SupplementaryName',
      'desc' => [
        'en' => 'Supplementary Name',
      ],
    ],
  ];

}
