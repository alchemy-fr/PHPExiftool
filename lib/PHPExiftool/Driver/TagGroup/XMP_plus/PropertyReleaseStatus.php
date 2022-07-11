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
class PropertyReleaseStatus extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:PropertyReleaseStatus';

  protected string $name = 'PropertyReleaseStatus';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Property Release Status',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 272660
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PLUS::XMP.XMP-plus:PropertyReleaseStatus',
      'desc' => [
        'en' => 'Property Release Status',
      ],
    ],
  ];

}
