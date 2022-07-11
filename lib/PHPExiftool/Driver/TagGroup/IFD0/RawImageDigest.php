<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawImageDigest extends AbstractTagGroup
{

  protected string $id = 'IFD0:RawImageDigest';

  protected string $name = 'RawImageDigest';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw Image Digest',
    'fr' => 'Digest d\'image brute',
  ];

  protected int $count = 16;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120643
       * type : int8u
       * writable : true
       * count : 16
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:RawImageDigest',
      'desc' => [
        'en' => 'Raw Image Digest',
        'fr' => 'Digest d\'image brute',
      ],
    ],
  ];

}
