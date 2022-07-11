<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonScan;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalDEEHighlightAdj extends AbstractTagGroup
{

  protected string $id = 'NikonScan:DigitalDEEHighlightAdj';

  protected string $name = 'DigitalDEEHighlightAdj';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Digital DEE Highlight Adj',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Scan
       * line : 205630
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Scan.NikonScan:DigitalDEEHighlightAdj',
      'desc' => [
        'en' => 'Digital DEE Highlight Adj',
      ],
    ],
  ];

}
