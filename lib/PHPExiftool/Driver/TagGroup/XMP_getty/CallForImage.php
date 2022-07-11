<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_getty;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CallForImage extends AbstractTagGroup
{

  protected string $id = 'XMP-getty:CallForImage';

  protected string $name = 'CallForImage';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Call For Image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GettyImages
       * line : 397615
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GettyImages.XMP-getty:CallForImage',
      'desc' => [
        'en' => 'Call For Image',
      ],
    ],
  ];

}
