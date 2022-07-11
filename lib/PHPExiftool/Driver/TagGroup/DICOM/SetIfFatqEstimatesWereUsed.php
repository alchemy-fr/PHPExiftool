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
class SetIfFatqEstimatesWereUsed extends AbstractTagGroup
{

  protected string $id = 'DICOM:SetIfFatqEstimatesWereUsed';

  protected string $name = 'SetIfFatqEstimatesWereUsed';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Set If Fatq Estimates Were Used',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 97888
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:SetIfFatqEstimatesWereUsed',
      'desc' => [
        'en' => 'Set If Fatq Estimates Were Used',
      ],
    ],
  ];

}
