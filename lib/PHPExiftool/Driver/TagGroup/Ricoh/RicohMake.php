<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RicohMake extends AbstractTagGroup
{

  protected string $id = 'Ricoh:RicohMake';

  protected string $name = 'RicohMake';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Ricoh Make',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::Type2
       * line : 334192
       * type : undef
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Ricoh::Type2.Ricoh:RicohMake',
      'desc' => [
        'en' => 'Ricoh Make',
      ],
    ],
  ];

}
