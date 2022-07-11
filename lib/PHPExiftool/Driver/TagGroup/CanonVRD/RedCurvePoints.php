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
class RedCurvePoints extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:RedCurvePoints';

  protected string $name = 'RedCurvePoints';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Red Curve Points',
  ];

  protected int $count = 21;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::ToneCurve
       * line : 82157
       * type : int32u
       * writable : true
       * count : 21
       * flags : 
       */
      'id' => 'CanonVRD::ToneCurve.CanonVRD:RedCurvePoints',
      'desc' => [
        'en' => 'Red Curve Points',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82456
       * type : int16u
       * writable : true
       * count : 21
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:RedCurvePoints',
      'desc' => [
        'en' => 'Red Curve Points',
      ],
    ],
  ];

}
