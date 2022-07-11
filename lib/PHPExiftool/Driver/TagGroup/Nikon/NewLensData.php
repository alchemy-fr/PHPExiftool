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
class NewLensData extends AbstractTagGroup
{

  protected string $id = 'Nikon:NewLensData';

  protected string $name = 'NewLensData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'New Lens Data',
  ];

  protected int $count = 17;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::LensData0800
       * line : 196448
       * type : undef
       * writable : true
       * count : 17
       * flags : Permanent
       */
      'id' => 'Nikon::LensData0800.Nikon:NewLensData',
      'desc' => [
        'en' => 'New Lens Data',
      ],
    ],
  ];

}
