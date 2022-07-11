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
class OriginPlatform extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:OriginPlatform';

  protected string $name = 'OriginPlatform';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Origin Platform',
  ];

  protected int $count = 0;

  protected int $flags = 321;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 411344
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Bag,List
       */
      'id' => 'XMP::prism.XMP-prism:OriginPlatform',
      'desc' => [
        'en' => 'Origin Platform',
      ],
    ],
  ];

}
