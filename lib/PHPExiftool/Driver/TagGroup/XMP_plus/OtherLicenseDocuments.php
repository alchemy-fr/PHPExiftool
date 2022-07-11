<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OtherLicenseDocuments extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:OtherLicenseDocuments';

  protected string $name = 'OtherLicenseDocuments';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Other License Documents',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 272640
       * type : string
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'PLUS::XMP.XMP-plus:OtherLicenseDocuments',
      'desc' => [
        'en' => 'Other License Documents',
      ],
    ],
  ];

}
