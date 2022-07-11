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
class OECFValues extends AbstractTagGroup
{

  protected string $id = 'XMP-exif:OECFValues';

  protected string $name = 'OECFValues';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'OECF Values',
    'fr' => 'Valeurs OECF',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exif
       * line : 408021
       * type : rational
       * writable : true
       * count : 
       * flags : Flattened,List,Seq
       */
      'id' => 'XMP::exif.XMP-exif:OECFValues',
      'desc' => [
        'en' => 'OECF Values',
        'fr' => 'Valeurs OECF',
      ],
    ],
  ];

}
