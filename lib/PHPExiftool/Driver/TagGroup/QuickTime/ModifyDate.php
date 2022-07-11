<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModifyDate extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ModifyDate';

  protected string $name = 'ModifyDate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Modify Date',
    'fr' => 'Date de modification de fichier',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::MetaData
       * line : 324372
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'QuickTime::MetaData.QuickTime:ModifyDate',
      'desc' => [
        'en' => 'Modify Date',
        'fr' => 'Date de modification de fichier',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::MovieHeader
       * line : 324443
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'QuickTime::MovieHeader.QuickTime:ModifyDate',
      'desc' => [
        'en' => 'Modify Date',
        'fr' => 'Date de modification de fichier',
      ],
    ],
  ];

}
