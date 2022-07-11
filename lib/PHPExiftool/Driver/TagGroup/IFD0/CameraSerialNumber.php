<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraSerialNumber extends AbstractTagGroup
{

  protected string $id = 'IFD0:CameraSerialNumber';

  protected string $name = 'CameraSerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Serial Number',
    'fr' => 'Numéro de série de l\'appareil',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119518
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:CameraSerialNumber',
      'desc' => [
        'en' => 'Camera Serial Number',
        'fr' => 'Numéro de série de l\'appareil',
      ],
    ],
  ];

}
