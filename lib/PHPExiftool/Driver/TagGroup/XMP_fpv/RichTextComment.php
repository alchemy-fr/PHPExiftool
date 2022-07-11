<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_fpv;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RichTextComment extends AbstractTagGroup
{

  protected string $id = 'XMP-fpv:RichTextComment';

  protected string $name = 'RichTextComment';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Rich Text Comment',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::fpv
       * line : 409141
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::fpv.XMP-fpv:RichTextComment',
      'desc' => [
        'en' => 'Rich Text Comment',
      ],
    ],
  ];

}
