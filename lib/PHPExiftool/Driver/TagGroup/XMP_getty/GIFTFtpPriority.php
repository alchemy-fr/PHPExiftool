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
class GIFTFtpPriority extends AbstractTagGroup
{

  protected string $id = 'XMP-getty:GIFTFtpPriority';

  protected string $name = 'GIFTFtpPriority';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'GIFT Ftp Priority',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GettyImages
       * line : 397645
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GettyImages.XMP-getty:GIFTFtpPriority',
      'desc' => [
        'en' => 'GIFT Ftp Priority',
      ],
    ],
  ];

}
