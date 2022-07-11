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
class JpgFromRawStart extends AbstractTagGroup
{

  protected string $id = 'SubIFD:JpgFromRawStart';

  protected string $name = 'JpgFromRawStart';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Jpg From Raw Start',
  ];

  protected int $count = 0;

  protected int $flags = 12;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 112675
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'Exif::Main.SubIFD:JpgFromRawStart',
      'desc' => [
        'en' => 'Jpg From Raw Start',
      ],
    ],
  ];

}
