<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFStatusLower_middle extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatusLower-middle';

  protected string $name = 'AFStatusLower-middle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Status Lower-middle',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFStatus15
       * line : 343915
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFStatus15.Sony:AFStatusLower-middle',
      'desc' => [
        'en' => 'AF Status Lower-middle',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::AFStatus19
       * line : 344134
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFStatus19.Sony:AFStatusLower-middle',
      'desc' => [
        'en' => 'AF Status Lower-middle',
      ],
    ],
  ];

}
