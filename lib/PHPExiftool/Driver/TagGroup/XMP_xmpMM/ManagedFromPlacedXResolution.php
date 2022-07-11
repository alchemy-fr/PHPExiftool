<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ManagedFromPlacedXResolution extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:ManagedFromPlacedXResolution';

  protected string $name = 'ManagedFromPlacedXResolution';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Managed From Placed X Resolution',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414397
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:ManagedFromPlacedXResolution',
      'desc' => [
        'en' => 'Managed From Placed X Resolution',
      ],
    ],
  ];

}
