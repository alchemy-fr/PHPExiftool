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
class Author extends AbstractTagGroup
{

  protected string $id = 'UserData:Author';

  protected string $name = 'Author';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Author',
    'fr' => 'Auteur',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325704
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'QuickTime::UserData.UserData:Author',
      'desc' => [
        'en' => 'Author',
        'fr' => 'Auteur',
      ],
    ],
  ];

}
