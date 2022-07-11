<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneCurveColorSpace extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:ToneCurveColorSpace';

  protected string $name = 'ToneCurveColorSpace';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Tone Curve Color Space',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::ToneCurve
       * line : 82117
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::ToneCurve.CanonVRD:ToneCurveColorSpace',
      'desc' => [
        'en' => 'Tone Curve Color Space',
      ],
    ],
  ];

}
