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
class TaxonInfraspecificEpithet extends AbstractTagGroup
{

  protected string $id = 'XMP-dwc:TaxonInfraspecificEpithet';

  protected string $name = 'TaxonInfraspecificEpithet';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Taxon Infraspecific Epithet',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DarwinCore::Main
       * line : 107085
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'DarwinCore::Main.XMP-dwc:TaxonInfraspecificEpithet',
      'desc' => [
        'en' => 'Taxon Infraspecific Epithet',
      ],
    ],
  ];

}
