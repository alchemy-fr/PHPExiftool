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
class GammaCurveOutputRange extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:GammaCurveOutputRange';

  protected string $name = 'GammaCurveOutputRange';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gamma Curve Output Range',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::GammaInfo
       * line : 82036
       * type : double
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'CanonVRD::GammaInfo.CanonVRD:GammaCurveOutputRange',
      'desc' => [
        'en' => 'Gamma Curve Output Range',
      ],
    ],
  ];

}
