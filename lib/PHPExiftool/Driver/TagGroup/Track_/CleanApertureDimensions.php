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
class CleanApertureDimensions extends AbstractTagGroup
{

  protected string $id = 'Track#:CleanApertureDimensions';

  protected string $name = 'CleanApertureDimensions';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Clean Aperture Dimensions',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::TrackAperture
       * line : 325383
       * type : fixed32u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::TrackAperture.Track#:CleanApertureDimensions',
      'desc' => [
        'en' => 'Clean Aperture Dimensions',
      ],
    ],
  ];

}
