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
class WhiteSampleHeight extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:WhiteSampleHeight';

  protected string $name = 'WhiteSampleHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'White Sample Height',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::WhiteSample
       * line : 80140
       * type : int16u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonRaw::WhiteSample.CanonRaw:WhiteSampleHeight',
      'desc' => [
        'en' => 'White Sample Height',
      ],
    ],
  ];

}
