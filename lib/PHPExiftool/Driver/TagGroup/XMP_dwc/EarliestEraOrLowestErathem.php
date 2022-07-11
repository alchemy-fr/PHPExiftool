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
class EarliestEraOrLowestErathem extends AbstractTagGroup
{

  protected string $id = 'XMP-dwc:EarliestEraOrLowestErathem';

  protected string $name = 'EarliestEraOrLowestErathem';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Earliest Era Or Lowest Erathem',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DarwinCore::Main
       * line : 106516
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'DarwinCore::Main.XMP-dwc:EarliestEraOrLowestErathem',
      'desc' => [
        'en' => 'Earliest Era Or Lowest Erathem',
      ],
    ],
  ];

}
