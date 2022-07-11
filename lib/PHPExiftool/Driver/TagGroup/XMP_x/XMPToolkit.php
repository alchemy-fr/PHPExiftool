<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_x;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XMPToolkit extends AbstractTagGroup
{

  protected string $id = 'XMP-x:XMPToolkit';

  protected string $name = 'XMPToolkit';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'XMP Toolkit',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::x
       * line : 412890
       * type : string
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'XMP::x.XMP-x:XMPToolkit',
      'desc' => [
        'en' => 'XMP Toolkit',
      ],
    ],
  ];

}
