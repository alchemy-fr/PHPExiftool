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
class LossyImageCompression extends AbstractTagGroup
{

  protected string $id = 'DICOM:LossyImageCompression';

  protected string $name = 'LossyImageCompression';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Lossy Image Compression',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 95328
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:LossyImageCompression',
      'desc' => [
        'en' => 'Lossy Image Compression',
      ],
    ],
    1 => [
      /**
       * table_name : DICOM::Main
       * line : 99433
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:LossyImageCompression',
      'desc' => [
        'en' => 'Lossy Image Compression',
      ],
    ],
  ];

}
