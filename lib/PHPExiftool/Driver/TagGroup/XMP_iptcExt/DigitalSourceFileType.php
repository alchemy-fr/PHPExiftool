<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalSourceFileType extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:DigitalSourceFileType';

  protected string $name = 'DigitalSourceFileType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Digital Source File Type',
    'fr' => 'Type de fichier de la source numérique',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409590
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:DigitalSourceFileType',
      'desc' => [
        'en' => 'Digital Source File Type',
        'fr' => 'Type de fichier de la source numérique',
      ],
    ],
  ];

}
