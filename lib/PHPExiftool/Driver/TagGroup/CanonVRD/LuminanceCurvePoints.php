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
class LuminanceCurvePoints extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:LuminanceCurvePoints';

  protected string $name = 'LuminanceCurvePoints';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Luminance Curve Points',
  ];

  protected int $count = 21;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82436
       * type : int16u
       * writable : true
       * count : 21
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:LuminanceCurvePoints',
      'desc' => [
        'en' => 'Luminance Curve Points',
      ],
    ],
  ];

}
