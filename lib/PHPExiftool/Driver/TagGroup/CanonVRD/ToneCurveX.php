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
class ToneCurveX extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:ToneCurveX';

  protected string $name = 'ToneCurveX';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Tone Curve X',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::ToneCurve
       * line : 82151
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::ToneCurve.CanonVRD:ToneCurveX',
      'desc' => [
        'en' => 'Tone Curve X',
      ],
    ],
  ];

}
