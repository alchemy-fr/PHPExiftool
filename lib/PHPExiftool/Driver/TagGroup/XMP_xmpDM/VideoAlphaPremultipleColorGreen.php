<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoAlphaPremultipleColorGreen extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:VideoAlphaPremultipleColorGreen';

  protected string $name = 'VideoAlphaPremultipleColorGreen';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Video Alpha Premultiple Color Green',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413986
       * type : integer
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:VideoAlphaPremultipleColorGreen',
      'desc' => [
        'en' => 'Video Alpha Premultiple Color Green',
      ],
    ],
  ];

}
