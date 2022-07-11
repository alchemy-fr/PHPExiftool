<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_LImage;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MajorVersion extends AbstractTagGroup
{

  protected string $id = 'XMP-LImage:MajorVersion';

  protected string $name = 'MajorVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Major Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::LImage
       * line : 397704
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::LImage.XMP-LImage:MajorVersion',
      'desc' => [
        'en' => 'Major Version',
      ],
    ],
  ];

}
