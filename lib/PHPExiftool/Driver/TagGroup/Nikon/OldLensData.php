<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OldLensData extends AbstractTagGroup
{

  protected string $id = 'Nikon:OldLensData';

  protected string $name = 'OldLensData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Old Lens Data',
  ];

  protected int $count = 17;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196316
       * type : undef
       * writable : true
       * count : 17
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:OldLensData',
      'desc' => [
        'en' => 'Old Lens Data',
      ],
    ],
  ];

}
