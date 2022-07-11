<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IPTCDigest extends AbstractTagGroup
{

  protected string $id = 'Photoshop:IPTCDigest';

  protected string $name = 'IPTCDigest';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'IPTC Digest',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 305936
       * type : string
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Photoshop::Main.Photoshop:IPTCDigest',
      'desc' => [
        'en' => 'IPTC Digest',
      ],
    ],
  ];

}
