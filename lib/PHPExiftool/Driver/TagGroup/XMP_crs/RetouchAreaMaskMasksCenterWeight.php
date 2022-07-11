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
class RetouchAreaMaskMasksCenterWeight extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:RetouchAreaMaskMasksCenterWeight';

  protected string $name = 'RetouchAreaMaskMasksCenterWeight';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch Area Mask Masks Center Weight',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404442
       * type : real
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskMasksCenterWeight',
      'desc' => [
        'en' => 'Retouch Area Mask Masks Center Weight',
      ],
    ],
  ];

}
