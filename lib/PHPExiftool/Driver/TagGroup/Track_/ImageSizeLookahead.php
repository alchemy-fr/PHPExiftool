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
class ImageSizeLookahead extends AbstractTagGroup
{

  protected string $id = 'Track#:ImageSizeLookahead';

  protected string $name = 'ImageSizeLookahead';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Size Lookahead',
  ];

  protected int $count = 14;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::TrackHeader
       * line : 325416
       * type : int32u
       * writable : false
       * count : 14
       * flags : 
       */
      'id' => 'QuickTime::TrackHeader.Track#:ImageSizeLookahead',
      'desc' => [
        'en' => 'Image Size Lookahead',
      ],
    ],
  ];

}
