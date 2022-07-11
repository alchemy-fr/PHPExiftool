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
class FaxSubAddress extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:FaxSubAddress';

  protected string $name = 'FaxSubAddress';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Fax Sub Address',
    'fr' => 'Sous-adresse Fax',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 114314
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:FaxSubAddress',
      'desc' => [
        'en' => 'Fax Sub Address',
        'fr' => 'Sous-adresse Fax',
      ],
    ],
  ];

}
