<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\UserData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MakerNotePentaxUnknown extends AbstractTagGroup
{

  protected string $id = 'UserData:MakerNotePentaxUnknown';

  protected string $name = 'MakerNotePentaxUnknown';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Maker Note Pentax Unknown',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325618
       * type : string
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'QuickTime::UserData.UserData:MakerNotePentaxUnknown',
      'desc' => [
        'en' => 'Maker Note Pentax Unknown',
      ],
    ],
  ];

}
