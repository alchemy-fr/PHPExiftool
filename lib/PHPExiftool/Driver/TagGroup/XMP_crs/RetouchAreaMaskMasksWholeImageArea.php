<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RetouchAreaMaskMasksWholeImageArea extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:RetouchAreaMaskMasksWholeImageArea';

  protected string $name = 'RetouchAreaMaskMasksWholeImageArea';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch Area Mask Masks Whole Image Area',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404535
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskMasksWholeImageArea',
      'desc' => [
        'en' => 'Retouch Area Mask Masks Whole Image Area',
      ],
    ],
  ];

}
