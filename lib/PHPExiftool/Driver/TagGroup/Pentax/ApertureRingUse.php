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
class ApertureRingUse extends AbstractTagGroup
{

  protected string $id = 'Pentax:ApertureRingUse';

  protected string $name = 'ApertureRingUse';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Aperture Ring Use',
    'fr' => 'Utilisation de la bague de diaphragme',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::CameraSettings
       * line : 284897
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::CameraSettings.Pentax:ApertureRingUse',
      'desc' => [
        'en' => 'Aperture Ring Use',
        'fr' => 'Utilisation de la bague de diaphragme',
      ],
    ],
  ];

}
