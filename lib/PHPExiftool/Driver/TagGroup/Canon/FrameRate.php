<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FrameRate extends AbstractTagGroup
{

  protected string $id = 'Canon:FrameRate';

  protected string $name = 'FrameRate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Frame Rate',
    'fr' => 'Vitesse',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::MovieInfo
       * line : 66844
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::MovieInfo.Canon:FrameRate',
      'desc' => [
        'en' => 'Frame Rate',
        'fr' => 'Vitesse',
      ],
    ],
    1 => [
      /**
       * table_name : Canon::MovieInfo
       * line : 66869
       * type : rational32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::MovieInfo.Canon:FrameRate',
      'desc' => [
        'en' => 'Frame Rate',
        'fr' => 'Vitesse',
      ],
    ],
  ];

}
