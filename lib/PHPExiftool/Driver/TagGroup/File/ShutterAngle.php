<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShutterAngle extends AbstractTagGroup
{

  protected string $id = 'File:ShutterAngle';

  protected string $name = 'ShutterAngle';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Shutter Angle',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 106239
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DPX::Main.File:ShutterAngle',
      'desc' => [
        'en' => 'Shutter Angle',
      ],
    ],
  ];

}
