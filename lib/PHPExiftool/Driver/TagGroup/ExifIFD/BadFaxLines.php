<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BadFaxLines extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:BadFaxLines';

  protected string $name = 'BadFaxLines';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Bad Fax Lines',
    'fr' => 'Mauvaises lignes de Fax',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111923
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:BadFaxLines',
      'desc' => [
        'en' => 'Bad Fax Lines',
        'fr' => 'Mauvaises lignes de Fax',
      ],
    ],
  ];

}
