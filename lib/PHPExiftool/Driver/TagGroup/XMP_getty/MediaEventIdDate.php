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
class MediaEventIdDate extends AbstractTagGroup
{

  protected string $id = 'XMP-getty:MediaEventIdDate';

  protected string $name = 'MediaEventIdDate';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Media Event Id Date',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GettyImages
       * line : 397653
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GettyImages.XMP-getty:MediaEventIdDate',
      'desc' => [
        'en' => 'Media Event Id Date',
      ],
    ],
  ];

}
