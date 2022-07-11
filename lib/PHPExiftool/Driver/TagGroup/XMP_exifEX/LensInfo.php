<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exifEX;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-exifEX:LensInfo';

  protected string $name = 'LensInfo';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Info',
    'fr' => 'Informations sur l\'objectif',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exifEX
       * line : 409006
       * type : rational
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::exifEX.XMP-exifEX:LensInfo',
      'desc' => [
        'en' => 'Lens Info',
        'fr' => 'Informations sur l\'objectif',
      ],
    ],
  ];

}
