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
class RetouchAreaMaskMaskInverted extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:RetouchAreaMaskMaskInverted';

  protected string $name = 'RetouchAreaMaskMaskInverted';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch Area Mask Mask Inverted',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404421
       * type : boolean
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskMaskInverted',
      'desc' => [
        'en' => 'Retouch Area Mask Mask Inverted',
      ],
    ],
  ];

}
