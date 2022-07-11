<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlackLevelDeltaH extends AbstractTagGroup
{

  protected string $id = 'SubIFD:BlackLevelDeltaH';

  protected string $name = 'BlackLevelDeltaH';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Black Level Delta H',
    'fr' => 'Delta H du niveau noir',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119314
       * type : rational64s
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.SubIFD:BlackLevelDeltaH',
      'desc' => [
        'en' => 'Black Level Delta H',
        'fr' => 'Delta H du niveau noir',
      ],
    ],
  ];

}
