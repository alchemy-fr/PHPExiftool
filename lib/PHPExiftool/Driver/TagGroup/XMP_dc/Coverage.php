<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Coverage extends AbstractTagGroup
{

  protected string $id = 'XMP-dc:Coverage';

  protected string $name = 'Coverage';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Coverage',
    'fr' => 'Couverture',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::dc
       * line : 405121
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::dc.XMP-dc:Coverage',
      'desc' => [
        'en' => 'Coverage',
        'fr' => 'Couverture',
      ],
    ],
  ];

}
