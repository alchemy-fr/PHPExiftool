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
class NikonICCProfile extends AbstractTagGroup
{

  protected string $id = 'Nikon:NikonICCProfile';

  protected string $name = 'NikonICCProfile';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Nikon ICC Profile',
  ];

  protected int $count = 0;

  protected int $flags = 22;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199951
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Permanent,Unsafe
       */
      'id' => 'Nikon::Main.Nikon:NikonICCProfile',
      'desc' => [
        'en' => 'Nikon ICC Profile',
      ],
    ],
  ];

}
