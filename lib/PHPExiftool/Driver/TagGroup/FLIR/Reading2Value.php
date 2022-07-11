<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Reading2Value extends AbstractTagGroup
{

  protected string $id = 'FLIR:Reading2Value';

  protected string $name = 'Reading2Value';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Reading 2 Value',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::MeterLink
       * line : 123703
       * type : double
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::MeterLink.FLIR:Reading2Value',
      'desc' => [
        'en' => 'Reading 2 Value',
      ],
    ],
  ];

}
