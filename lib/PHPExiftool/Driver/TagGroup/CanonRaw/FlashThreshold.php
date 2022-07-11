<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashThreshold extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:FlashThreshold';

  protected string $name = 'FlashThreshold';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Threshold',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::FlashInfo
       * line : 78521
       * type : float
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonRaw::FlashInfo.CanonRaw:FlashThreshold',
      'desc' => [
        'en' => 'Flash Threshold',
      ],
    ],
  ];

}
