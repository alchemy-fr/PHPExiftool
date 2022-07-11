<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashDefault extends AbstractTagGroup
{

  protected string $id = 'Minolta:FlashDefault';

  protected string $name = 'FlashDefault';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Default',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 181964
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:FlashDefault',
      'desc' => [
        'en' => 'Flash Default',
      ],
    ],
  ];

}
