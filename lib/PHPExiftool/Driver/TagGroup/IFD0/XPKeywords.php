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
class XPKeywords extends AbstractTagGroup
{

  protected string $id = 'IFD0:XPKeywords';

  protected string $name = 'XPKeywords';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'XP Keywords',
    'fr' => 'Mots clé',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 116711
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:XPKeywords',
      'desc' => [
        'en' => 'XP Keywords',
        'fr' => 'Mots clé',
      ],
    ],
  ];

}
