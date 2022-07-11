<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\WTV;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MediaThumbTimeStamp extends AbstractTagGroup
{

  protected string $id = 'WTV:MediaThumbTimeStamp';

  protected string $name = 'MediaThumbTimeStamp';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Media Thumb Time Stamp',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : WTV::Metadata
       * line : 396531
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'WTV::Metadata.WTV:MediaThumbTimeStamp',
      'desc' => [
        'en' => 'Media Thumb Time Stamp',
      ],
    ],
  ];

}
