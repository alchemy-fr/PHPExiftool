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
class GammaSaturation extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:GammaSaturation';

  protected string $name = 'GammaSaturation';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gamma Saturation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::GammaInfo
       * line : 82006
       * type : double
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::GammaInfo.CanonVRD:GammaSaturation',
      'desc' => [
        'en' => 'Gamma Saturation',
      ],
    ],
  ];

}
