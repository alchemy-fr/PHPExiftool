<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Red;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalFileName extends AbstractTagGroup
{

  protected string $id = 'Red:OriginalFileName';

  protected string $name = 'OriginalFileName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Original File Name',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Red::Main
       * line : 331843
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Red::Main.Red:OriginalFileName',
      'desc' => [
        'en' => 'Original File Name',
      ],
    ],
    1 => [
      /**
       * table_name : Red::RED1
       * line : 332065
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'Red::RED1.Red:OriginalFileName',
      'desc' => [
        'en' => 'Original File Name',
      ],
    ],
  ];

}
