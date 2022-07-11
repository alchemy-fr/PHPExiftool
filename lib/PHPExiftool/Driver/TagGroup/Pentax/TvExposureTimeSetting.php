<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TvExposureTimeSetting extends AbstractTagGroup
{

  protected string $id = 'Pentax:TvExposureTimeSetting';

  protected string $name = 'TvExposureTimeSetting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Tv Exposure Time Setting',
    'fr' => 'Réglage de temps de pose Tv',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::CameraSettings
       * line : 285860
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::CameraSettings.Pentax:TvExposureTimeSetting',
      'desc' => [
        'en' => 'Tv Exposure Time Setting',
        'fr' => 'Réglage de temps de pose Tv',
      ],
    ],
  ];

}
