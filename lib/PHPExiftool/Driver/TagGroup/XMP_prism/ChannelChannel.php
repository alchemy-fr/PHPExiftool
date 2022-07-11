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
class ChannelChannel extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:ChannelChannel';

  protected string $name = 'ChannelChannel';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Channel Channel',
  ];

  protected int $count = 0;

  protected int $flags = 65;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 411113
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened,List
       */
      'id' => 'XMP::prism.XMP-prism:ChannelChannel',
      'desc' => [
        'en' => 'Channel Channel',
      ],
    ],
  ];

}
