<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SeriesDescription extends AbstractTagGroup
{

  protected string $id = 'XMP-DICOM:SeriesDescription';

  protected string $name = 'SeriesDescription';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Series Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::DICOM
       * line : 396803
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::DICOM.XMP-DICOM:SeriesDescription',
      'desc' => [
        'en' => 'Series Description',
      ],
    ],
  ];

}
