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
class AEApertureSteps extends AbstractTagGroup
{

  protected string $id = 'Pentax:AEApertureSteps';

  protected string $name = 'AEApertureSteps';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AE Aperture Steps',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::AEInfo
       * line : 283256
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo.Pentax:AEApertureSteps',
      'desc' => [
        'en' => 'AE Aperture Steps',
      ],
    ],
    1 => [
      /**
       * table_name : Pentax::AEInfo2
       * line : 283408
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::AEInfo2.Pentax:AEApertureSteps',
      'desc' => [
        'en' => 'AE Aperture Steps',
      ],
    ],
  ];

}
