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
class LowerRangeOfPixels1c extends AbstractTagGroup
{

  protected string $id = 'DICOM:LowerRangeOfPixels1c';

  protected string $name = 'LowerRangeOfPixels1c';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Lower Range Of Pixels 1c',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 99601
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:LowerRangeOfPixels1c',
      'desc' => [
        'en' => 'Lower Range Of Pixels 1c',
      ],
    ],
  ];

}
