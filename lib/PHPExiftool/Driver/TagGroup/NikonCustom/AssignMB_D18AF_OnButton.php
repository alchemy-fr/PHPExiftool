<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AssignMB_D18AF_OnButton extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AssignMB-D18AF-OnButton';

  protected string $name = 'AssignMB-D18AF-OnButton';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Assign MB-D18 AF-On Button',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 234150
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:AssignMB-D18AF-OnButton',
      'desc' => [
        'en' => 'Assign MB-D18 AF-On Button',
      ],
    ],
  ];

}
