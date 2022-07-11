<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LicensorEmail extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:LicensorEmail';

  protected string $name = 'LicensorEmail';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Licensor Email',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 266002
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'PLUS::XMP.XMP-plus:LicensorEmail',
      'desc' => [
        'en' => 'Licensor Email',
      ],
    ],
  ];

}
