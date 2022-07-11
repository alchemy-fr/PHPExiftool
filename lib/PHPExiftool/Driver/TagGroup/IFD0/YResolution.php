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
class YResolution extends AbstractTagGroup
{

  protected string $id = 'IFD0:YResolution';

  protected string $name = 'YResolution';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Y Resolution',
    'fr' => 'Résolution d\'image verticale',
  ];

  protected int $count = 0;

  protected int $flags = 128;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111315
       * type : rational64u
       * writable : true
       * count : 
       * flags : Mandatory
       */
      'id' => 'Exif::Main.IFD0:YResolution',
      'desc' => [
        'en' => 'Y Resolution',
        'fr' => 'Résolution d\'image verticale',
      ],
    ],
  ];

}
