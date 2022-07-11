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
class SettingStreetNumberOrBuildingName extends AbstractTagGroup
{

  protected string $id = 'MXF:SettingStreetNumberOrBuildingName';

  protected string $name = 'SettingStreetNumberOrBuildingName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Setting Street Number Or Building Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168795
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SettingStreetNumberOrBuildingName',
      'desc' => [
        'en' => 'Setting Street Number Or Building Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170856
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:SettingStreetNumberOrBuildingName',
      'desc' => [
        'en' => 'Setting Street Number Or Building Name',
      ],
    ],
  ];

}
