<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SnapshotUsedVideoFrameTimeValue extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:SnapshotUsedVideoFrameTimeValue';

  protected string $name = 'SnapshotUsedVideoFrameTimeValue';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Snapshot Used Video Frame Time Value',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 410141
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:SnapshotUsedVideoFrameTimeValue',
      'desc' => [
        'en' => 'Snapshot Used Video Frame Time Value',
      ],
    ],
  ];

}
