<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AutoAFPointSelEOSiTRAF extends AbstractTagGroup
{

  protected string $id = 'Canon:AutoAFPointSelEOSiTRAF';

  protected string $name = 'AutoAFPointSelEOSiTRAF';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Auto AF Point Sel EOS iTR AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::AFConfig
       * line : 3877
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::AFConfig.Canon:AutoAFPointSelEOSiTRAF',
      'desc' => [
        'en' => 'Auto AF Point Sel EOS iTR AF',
      ],
    ],
  ];

}
