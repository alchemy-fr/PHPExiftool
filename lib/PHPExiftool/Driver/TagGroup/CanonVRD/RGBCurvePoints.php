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
class RGBCurvePoints extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:RGBCurvePoints';

  protected string $name = 'RGBCurvePoints';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'RGB Curve Points',
  ];

  protected int $count = 21;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::ToneCurve
       * line : 82147
       * type : int32u
       * writable : true
       * count : 21
       * flags : 
       */
      'id' => 'CanonVRD::ToneCurve.CanonVRD:RGBCurvePoints',
      'desc' => [
        'en' => 'RGB Curve Points',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82476
       * type : int16u
       * writable : true
       * count : 21
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:RGBCurvePoints',
      'desc' => [
        'en' => 'RGB Curve Points',
      ],
    ],
  ];

}
