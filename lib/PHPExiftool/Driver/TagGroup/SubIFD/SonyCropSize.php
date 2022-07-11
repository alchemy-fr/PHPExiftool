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
class SonyCropSize extends AbstractTagGroup
{

  protected string $id = 'SubIFD:SonyCropSize';

  protected string $name = 'SonyCropSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sony Crop Size',
  ];

  protected int $count = 2;

  protected int $flags = 20;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113188
       * type : int32u
       * writable : true
       * count : 2
       * flags : Permanent,Unsafe
       */
      'id' => 'Exif::Main.SubIFD:SonyCropSize',
      'desc' => [
        'en' => 'Sony Crop Size',
      ],
    ],
  ];

}
