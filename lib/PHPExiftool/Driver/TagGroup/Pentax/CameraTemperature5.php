<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraTemperature5 extends AbstractTagGroup
{

  protected string $id = 'Pentax:CameraTemperature5';

  protected string $name = 'CameraTemperature5';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Temperature 5',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::TempInfo
       * line : 302167
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::TempInfo.Pentax:CameraTemperature5',
      'desc' => [
        'en' => 'Camera Temperature 5',
      ],
    ],
  ];

}
