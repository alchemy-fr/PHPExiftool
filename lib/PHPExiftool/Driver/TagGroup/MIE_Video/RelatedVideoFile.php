<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Video;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RelatedVideoFile extends AbstractTagGroup
{

  protected string $id = 'MIE-Video:RelatedVideoFile';

  protected string $name = 'RelatedVideoFile';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Related Video File',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Video
       * line : 164577
       * type : undef
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'MIE::Video.MIE-Video:RelatedVideoFile',
      'desc' => [
        'en' => 'Related Video File',
      ],
    ],
  ];

}
