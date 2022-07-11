<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MetaIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SBAExposureRecord extends AbstractTagGroup
{

  protected string $id = 'MetaIFD:SBAExposureRecord';

  protected string $name = 'SBAExposureRecord';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'SBA Exposure Record',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Meta
       * line : 158802
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'Kodak::Meta.MetaIFD:SBAExposureRecord',
      'desc' => [
        'en' => 'SBA Exposure Record',
      ],
    ],
  ];

}
