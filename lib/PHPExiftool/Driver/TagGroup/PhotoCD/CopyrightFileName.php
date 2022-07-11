<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoCD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CopyrightFileName extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:CopyrightFileName';

  protected string $name = 'CopyrightFileName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Copyright File Name',
  ];

  protected int $count = 12;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 304873
       * type : string
       * writable : false
       * count : 12
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:CopyrightFileName',
      'desc' => [
        'en' => 'Copyright File Name',
      ],
    ],
  ];

}
