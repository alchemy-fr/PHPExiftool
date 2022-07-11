<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContinuousShootingSpeed extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:ContinuousShootingSpeed';

  protected string $name = 'ContinuousShootingSpeed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Continuous Shooting Speed',
    'fr' => 'Vitesse de prise de vues en continu',
  ];

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74466
       * type : int32s
       * writable : true
       * count : 6
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:ContinuousShootingSpeed',
      'desc' => [
        'en' => 'Continuous Shooting Speed',
        'fr' => 'Vitesse de prise de vues en continu',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74487
       * type : int32s
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:ContinuousShootingSpeed',
      'desc' => [
        'en' => 'Continuous Shooting Speed',
        'fr' => 'Vitesse de prise de vues en continu',
      ],
    ],
    2 => [
      /**
       * table_name : CanonCustom::Functions2
       * line : 74493
       * type : int32s
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions2.CanonCustom:ContinuousShootingSpeed',
      'desc' => [
        'en' => 'Continuous Shooting Speed',
        'fr' => 'Vitesse de prise de vues en continu',
      ],
    ],
  ];

}
