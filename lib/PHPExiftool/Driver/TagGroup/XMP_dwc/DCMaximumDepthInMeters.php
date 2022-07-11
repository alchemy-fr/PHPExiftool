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
class DCMaximumDepthInMeters extends AbstractTagGroup
{

  protected string $id = 'XMP-dwc:DCMaximumDepthInMeters';

  protected string $name = 'DCMaximumDepthInMeters';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'DC Maximum Depth In Meters',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DarwinCore::Main
       * line : 107301
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'DarwinCore::Main.XMP-dwc:DCMaximumDepthInMeters',
      'desc' => [
        'en' => 'DC Maximum Depth In Meters',
      ],
    ],
  ];

}
