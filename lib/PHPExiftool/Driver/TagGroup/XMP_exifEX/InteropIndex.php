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
class InteropIndex extends AbstractTagGroup
{

  protected string $id = 'XMP-exifEX:InteropIndex';

  protected string $name = 'InteropIndex';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Interoperability Index',
    'fr' => 'Identification d\'interopérabilité',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exifEX
       * line : 408903
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::exifEX.XMP-exifEX:InteropIndex',
      'desc' => [
        'en' => 'Interoperability Index',
        'fr' => 'Identification d\'interopérabilité',
      ],
    ],
  ];

}
