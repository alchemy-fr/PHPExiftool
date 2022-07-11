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
class SensingMethod extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:SensingMethod';

  protected string $name = 'SensingMethod';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sensing Method',
    'fr' => 'Méthode de capture',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 115865
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:SensingMethod',
      'desc' => [
        'en' => 'Sensing Method',
        'fr' => 'Méthode de capture',
      ],
    ],
    1 => [
      /**
       * table_name : Exif::Main
       * line : 117135
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:SensingMethod',
      'desc' => [
        'en' => 'Sensing Method',
        'fr' => 'Méthode de capture',
      ],
    ],
  ];

}
