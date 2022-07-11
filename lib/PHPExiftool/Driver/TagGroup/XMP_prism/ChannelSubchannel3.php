<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChannelSubchannel3 extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:ChannelSubchannel3';

  protected string $name = 'ChannelSubchannel3';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Channel Subchannel 3',
  ];

  protected int $count = 0;

  protected int $flags = 65;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 411122
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List
       */
      'id' => 'XMP::prism.XMP-prism:ChannelSubchannel3',
      'desc' => [
        'en' => 'Channel Subchannel 3',
      ],
    ],
  ];

}
