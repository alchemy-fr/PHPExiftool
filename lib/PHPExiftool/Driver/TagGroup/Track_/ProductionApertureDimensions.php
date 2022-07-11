<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Track_;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProductionApertureDimensions extends AbstractTagGroup
{

  protected string $id = 'Track#:ProductionApertureDimensions';

  protected string $name = 'ProductionApertureDimensions';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Production Aperture Dimensions',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::TrackAperture
       * line : 325390
       * type : fixed32u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::TrackAperture.Track#:ProductionApertureDimensions',
      'desc' => [
        'en' => 'Production Aperture Dimensions',
      ],
    ],
  ];

}
