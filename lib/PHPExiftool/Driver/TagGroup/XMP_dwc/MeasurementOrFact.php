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
class MeasurementOrFact extends AbstractTagGroup
{

  protected string $id = 'XMP-dwc:MeasurementOrFact';

  protected string $name = 'MeasurementOrFact';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Measurement Or Fact',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DarwinCore::Main
       * line : 106792
       * type : struct
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'DarwinCore::Main.XMP-dwc:MeasurementOrFact',
      'desc' => [
        'en' => 'Measurement Or Fact',
      ],
    ],
  ];

}
