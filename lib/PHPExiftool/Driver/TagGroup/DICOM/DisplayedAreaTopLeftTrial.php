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
class DisplayedAreaTopLeftTrial extends AbstractTagGroup
{

  protected string $id = 'DICOM:DisplayedAreaTopLeftTrial';

  protected string $name = 'DisplayedAreaTopLeftTrial';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Displayed Area Top Left Trial',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 101640
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:DisplayedAreaTopLeftTrial',
      'desc' => [
        'en' => 'Displayed Area Top Left Trial',
      ],
    ],
  ];

}
