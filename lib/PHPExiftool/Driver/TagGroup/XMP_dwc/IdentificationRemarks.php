<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dwc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IdentificationRemarks extends AbstractTagGroup
{

  protected string $id = 'XMP-dwc:IdentificationRemarks';

  protected string $name = 'IdentificationRemarks';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Identification Remarks',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DarwinCore::Main
       * line : 106676
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'DarwinCore::Main.XMP-dwc:IdentificationRemarks',
      'desc' => [
        'en' => 'Identification Remarks',
      ],
    ],
  ];

}
