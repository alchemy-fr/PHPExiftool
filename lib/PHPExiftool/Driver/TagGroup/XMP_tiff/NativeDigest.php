<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_tiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NativeDigest extends AbstractTagGroup
{

  protected string $id = 'XMP-tiff:NativeDigest';

  protected string $name = 'NativeDigest';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Native Digest',
    'fr' => 'Sommaire natif',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::tiff
       * line : 412197
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::tiff.XMP-tiff:NativeDigest',
      'desc' => [
        'en' => 'Native Digest',
        'fr' => 'Sommaire natif',
      ],
    ],
  ];

}
