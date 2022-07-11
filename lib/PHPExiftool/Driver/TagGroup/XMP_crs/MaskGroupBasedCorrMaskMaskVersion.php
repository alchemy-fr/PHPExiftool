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
class MaskGroupBasedCorrMaskMaskVersion extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:MaskGroupBasedCorrMaskMaskVersion';

  protected string $name = 'MaskGroupBasedCorrMaskMaskVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Mask Group Based Corr Mask Mask Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 403548
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::crs.XMP-crs:MaskGroupBasedCorrMaskMaskVersion',
      'desc' => [
        'en' => 'Mask Group Based Corr Mask Mask Version',
      ],
    ],
  ];

}
