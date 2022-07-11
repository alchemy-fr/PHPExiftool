<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateTimeDigitized extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:DateTimeDigitized';

  protected string $name = 'DateTimeDigitized';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Date/Time Digitized',
    'fr' => 'Date/heure de la numérisation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 405706
       * type : date
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exif.XMP-exif:DateTimeDigitized',
      'desc' => [
        'en' => 'Date/Time Digitized',
        'fr' => 'Date/heure de la numérisation',
      ],
    ],
  ];

}
