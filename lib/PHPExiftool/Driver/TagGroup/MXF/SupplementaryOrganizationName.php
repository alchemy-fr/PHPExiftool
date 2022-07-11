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
class SupplementaryOrganizationName extends AbstractTagGroup
{

  protected string $id = 'MXF:SupplementaryOrganizationName';

  protected string $name = 'SupplementaryOrganizationName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Supplementary Organization Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167928
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SupplementaryOrganizationName',
      'desc' => [
        'en' => 'Supplementary Organization Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170427
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SupplementaryOrganizationName',
      'desc' => [
        'en' => 'Supplementary Organization Name',
      ],
    ],
  ];

}
