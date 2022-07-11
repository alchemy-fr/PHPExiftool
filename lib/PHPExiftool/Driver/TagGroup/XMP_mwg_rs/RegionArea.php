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
class RegionArea extends AbstractTagGroup
{

  protected string $id = 'XMP-mwg-rs:RegionArea';

  protected string $name = 'RegionArea';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Region Area',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : MWG::Regions
       * line : 167483
       * type : struct
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'MWG::Regions.XMP-mwg-rs:RegionArea',
      'desc' => [
        'en' => 'Region Area',
      ],
    ],
  ];

}
