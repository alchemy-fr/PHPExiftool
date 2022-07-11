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
class WhiteSampleWidth extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:WhiteSampleWidth';

  protected string $name = 'WhiteSampleWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'White Sample Width',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::WhiteSample
       * line : 80137
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonRaw::WhiteSample.CanonRaw:WhiteSampleWidth',
      'desc' => [
        'en' => 'White Sample Width',
      ],
    ],
  ];

}
