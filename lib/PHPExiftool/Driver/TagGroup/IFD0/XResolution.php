<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XResolution extends AbstractTagGroup
{

  protected string $id = 'IFD0:XResolution';

  protected string $name = 'XResolution';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'X Resolution',
    'fr' => 'Résolution d\'image horizontale',
  ];

  protected int $count = 0;

  protected int $flags = 128;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111299
       * type : rational64u
       * writable : true
       * count : 
       * flags : Mandatory
       */
      'id' => 'Exif::Main.IFD0:XResolution',
      'desc' => [
        'en' => 'X Resolution',
        'fr' => 'Résolution d\'image horizontale',
      ],
    ],
  ];

}
