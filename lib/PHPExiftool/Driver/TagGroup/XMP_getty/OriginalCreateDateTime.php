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
class OriginalCreateDateTime extends AbstractTagGroup
{

  protected string $id = 'XMP-getty:OriginalCreateDateTime';

  protected string $name = 'OriginalCreateDateTime';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Original Create Date Time',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GettyImages
       * line : 397657
       * type : date
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::GettyImages.XMP-getty:OriginalCreateDateTime',
      'desc' => [
        'en' => 'Original Create Date Time',
      ],
    ],
  ];

}
