<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GSpherical;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StitchingSoftware extends AbstractTagGroup
{

  protected string $id = 'GSpherical:StitchingSoftware';

  protected string $name = 'StitchingSoftware';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Stitching Software',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GSpherical
       * line : 397594
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::GSpherical.GSpherical:StitchingSoftware',
      'desc' => [
        'en' => 'Stitching Software',
      ],
    ],
  ];

}
