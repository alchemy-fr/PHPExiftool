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
class XPSubject extends AbstractTagGroup
{

  protected string $id = 'IFD0:XPSubject';

  protected string $name = 'XPSubject';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'XP Subject',
    'fr' => 'Sujet',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 116722
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:XPSubject',
      'desc' => [
        'en' => 'XP Subject',
        'fr' => 'Sujet',
      ],
    ],
  ];

}
