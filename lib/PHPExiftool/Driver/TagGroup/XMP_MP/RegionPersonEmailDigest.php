<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_MP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RegionPersonEmailDigest extends AbstractTagGroup
{

  protected string $id = 'XMP-MP:RegionPersonEmailDigest';

  protected string $name = 'RegionPersonEmailDigest';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Region Person Email Digest',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::MP
       * line : 174423
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'Microsoft::MP.XMP-MP:RegionPersonEmailDigest',
      'desc' => [
        'en' => 'Region Person Email Digest',
      ],
    ],
  ];

}
