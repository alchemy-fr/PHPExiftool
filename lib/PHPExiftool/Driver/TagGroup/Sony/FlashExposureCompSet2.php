<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashExposureCompSet2 extends AbstractTagGroup
{

  protected string $id = 'Sony:FlashExposureCompSet2';

  protected string $name = 'FlashExposureCompSet2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Exposure Comp. Setting 2',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361273
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FlashExposureCompSet2',
      'desc' => [
        'en' => 'Flash Exposure Comp. Setting 2',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::MoreSettings
       * line : 361390
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::MoreSettings.Sony:FlashExposureCompSet2',
      'desc' => [
        'en' => 'Flash Exposure Comp. Setting 2',
      ],
    ],
  ];

}
