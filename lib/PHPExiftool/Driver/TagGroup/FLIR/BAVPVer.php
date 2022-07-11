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
class BAVPVer extends AbstractTagGroup
{

  protected string $id = 'FLIR:BAVPVer';

  protected string $name = 'BAVPVer';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'BAVP Ver',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::Parts
       * line : 123954
       * type : undef
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FLIR::Parts.FLIR:BAVPVer',
      'desc' => [
        'en' => 'BAVP Ver',
      ],
    ],
  ];

}
