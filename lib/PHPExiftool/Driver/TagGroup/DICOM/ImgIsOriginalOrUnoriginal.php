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
class ImgIsOriginalOrUnoriginal extends AbstractTagGroup
{

  protected string $id = 'DICOM:ImgIsOriginalOrUnoriginal';

  protected string $name = 'ImgIsOriginalOrUnoriginal';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Img Is Original Or Unoriginal',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 100643
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:ImgIsOriginalOrUnoriginal',
      'desc' => [
        'en' => 'Img Is Original Or Unoriginal',
      ],
    ],
  ];

}
