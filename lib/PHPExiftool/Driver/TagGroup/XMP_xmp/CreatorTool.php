<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreatorTool extends AbstractTagGroup
{

  protected string $id = 'XMP-xmp:CreatorTool';

  protected string $name = 'CreatorTool';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Creator Tool',
    'fr' => 'Outil de création',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmp
       * line : 412943
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::xmp.XMP-xmp:CreatorTool',
      'desc' => [
        'en' => 'Creator Tool',
        'fr' => 'Outil de création',
      ],
    ],
  ];

}
