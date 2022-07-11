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
class LicensorURL extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:LicensorURL';

  protected string $name = 'LicensorURL';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Licensor URL',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 266090
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'PLUS::XMP.XMP-plus:LicensorURL',
      'desc' => [
        'en' => 'Licensor URL',
      ],
    ],
  ];

}
