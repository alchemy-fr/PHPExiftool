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
class AFStatusUpper_left extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatusUpper-left';

  protected string $name = 'AFStatusUpper-left';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Status Upper-left',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFStatus15
       * line : 343716
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFStatus15.Sony:AFStatusUpper-left',
      'desc' => [
        'en' => 'AF Status Upper-left',
      ],
    ],
    1 => [
      /**
       * table_name : Sony::CameraInfo
       * line : 345621
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::CameraInfo.Sony:AFStatusUpper-left',
      'desc' => [
        'en' => 'AF Status Upper-left',
      ],
    ],
  ];

}
