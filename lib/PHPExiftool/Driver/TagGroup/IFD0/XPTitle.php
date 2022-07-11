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
class XPTitle extends AbstractTagGroup
{

  protected string $id = 'IFD0:XPTitle';

  protected string $name = 'XPTitle';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'XP Title',
    'fr' => 'Titre',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 116678
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:XPTitle',
      'desc' => [
        'en' => 'XP Title',
        'fr' => 'Titre',
      ],
    ],
  ];

}
