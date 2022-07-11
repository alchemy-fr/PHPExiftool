<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GreenPaletteColorTableDescriptor extends AbstractTagGroup
{

  protected string $id = 'DICOM:GreenPaletteColorTableDescriptor';

  protected string $name = 'GreenPaletteColorTableDescriptor';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Green Palette Color Table Descriptor',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 99294
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:GreenPaletteColorTableDescriptor',
      'desc' => [
        'en' => 'Green Palette Color Table Descriptor',
      ],
    ],
  ];

}
