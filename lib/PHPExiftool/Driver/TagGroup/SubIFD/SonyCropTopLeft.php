<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SonyCropTopLeft extends AbstractTagGroup
{

  protected string $id = 'SubIFD:SonyCropTopLeft';

  protected string $name = 'SonyCropTopLeft';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sony Crop Top Left',
  ];

  protected int $count = 2;

  protected int $flags = 20;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113184
       * type : int32u
       * writable : true
       * count : 2
       * flags : Permanent,Unsafe
       */
      'id' => 'Exif::Main.SubIFD:SonyCropTopLeft',
      'desc' => [
        'en' => 'Sony Crop Top Left',
      ],
    ],
  ];

}
