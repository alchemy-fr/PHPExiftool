<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_mwg_rs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RegionAppliedToDimensionsW extends AbstractTagGroup
{

  protected string $id = 'XMP-mwg-rs:RegionAppliedToDimensionsW';

  protected string $name = 'RegionAppliedToDimensionsW';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Region Applied To Dimensions W',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MWG::Regions
       * line : 167474
       * type : real
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'MWG::Regions.XMP-mwg-rs:RegionAppliedToDimensionsW',
      'desc' => [
        'en' => 'Region Applied To Dimensions W',
      ],
    ],
  ];

}
