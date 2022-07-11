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
class LocationCreatedIdentifier extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:LocationCreatedIdentifier';

  protected string $name = 'LocationCreatedIdentifier';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Location Created Identifier',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409810
       * type : string
       * writable : true
       * count : 
       * flags : Bag,Flattened,List
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:LocationCreatedIdentifier',
      'desc' => [
        'en' => 'Location Created Identifier',
      ],
    ],
  ];

}
