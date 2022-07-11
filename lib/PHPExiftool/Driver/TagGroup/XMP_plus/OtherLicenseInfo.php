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
class OtherLicenseInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:OtherLicenseInfo';

  protected string $name = 'OtherLicenseInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Other License Info',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 272644
       * type : lang-alt
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PLUS::XMP.XMP-plus:OtherLicenseInfo',
      'desc' => [
        'en' => 'Other License Info',
      ],
    ],
  ];

}
