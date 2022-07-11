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
class AFStatus_55_F6 extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatus_55_F6';

  protected string $name = 'AFStatus_55_F6';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Status 55 F6',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFStatus79
       * line : 344875
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFStatus79.Sony:AFStatus_55_F6',
      'desc' => [
        'en' => 'AF Status 55 F6',
      ],
    ],
  ];

}
