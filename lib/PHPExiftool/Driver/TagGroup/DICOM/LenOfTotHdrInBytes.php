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
class LenOfTotHdrInBytes extends AbstractTagGroup
{

  protected string $id = 'DICOM:LenOfTotHdrInBytes';

  protected string $name = 'LenOfTotHdrInBytes';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Len Of Tot Hdr In Bytes',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 99628
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:LenOfTotHdrInBytes',
      'desc' => [
        'en' => 'Len Of Tot Hdr In Bytes',
      ],
    ],
  ];

}
