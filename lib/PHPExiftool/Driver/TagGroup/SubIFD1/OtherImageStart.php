<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD1;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OtherImageStart extends AbstractTagGroup
{

  protected string $id = 'SubIFD1:OtherImageStart';

  protected string $name = 'OtherImageStart';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Other Image Start',
  ];

  protected int $count = 0;

  protected int $flags = 12;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 112687
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Exif::Main.SubIFD1:OtherImageStart',
      'desc' => [
        'en' => 'Other Image Start',
      ],
    ],
  ];

}
