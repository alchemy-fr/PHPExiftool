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
class RetouchAreaMaskMasksMaskSyncID extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:RetouchAreaMaskMasksMaskSyncID';

  protected string $name = 'RetouchAreaMaskMasksMaskSyncID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch Area Mask Masks Mask Sync ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404487
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::crs.XMP-crs:RetouchAreaMaskMasksMaskSyncID',
      'desc' => [
        'en' => 'Retouch Area Mask Masks Mask Sync ID',
      ],
    ],
  ];

}
