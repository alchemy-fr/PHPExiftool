<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalPlaneResolutionUnit extends AbstractTagGroup
{

  protected string $id = 'FlashPix:FocalPlaneResolutionUnit';

  protected string $name = 'FocalPlaneResolutionUnit';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Focal Plane Resolution Unit',
    'fr' => 'Unité de résolution de plan focal',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::ImageInfo
       * line : 126648
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::ImageInfo.FlashPix:FocalPlaneResolutionUnit',
      'desc' => [
        'en' => 'Focal Plane Resolution Unit',
        'fr' => 'Unité de résolution de plan focal',
      ],
    ],
  ];

}
