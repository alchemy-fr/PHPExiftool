<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GIDPVer extends AbstractTagGroup
{

  protected string $id = 'FLIR:GIDPVer';

  protected string $name = 'GIDPVer';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'GIDP Ver',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::Parts
       * line : 123969
       * type : undef
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FLIR::Parts.FLIR:GIDPVer',
      'desc' => [
        'en' => 'GIDP Ver',
      ],
    ],
  ];

}
