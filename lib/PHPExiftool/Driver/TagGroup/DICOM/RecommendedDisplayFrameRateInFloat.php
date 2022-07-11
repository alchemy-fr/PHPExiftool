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
class RecommendedDisplayFrameRateInFloat extends AbstractTagGroup
{

  protected string $id = 'DICOM:RecommendedDisplayFrameRateInFloat';

  protected string $name = 'RecommendedDisplayFrameRateInFloat';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Recommended Display Frame Rate In Float',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 95485
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:RecommendedDisplayFrameRateInFloat',
      'desc' => [
        'en' => 'Recommended Display Frame Rate In Float',
      ],
    ],
  ];

}
