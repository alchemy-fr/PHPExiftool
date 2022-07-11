<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Text extends AbstractTagGroup
{

  protected string $id = 'QuickTime:Text';

  protected string $name = 'Text';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Text',
    'fr' => 'Texte',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::GenMediaHeader
       * line : 313570
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Unknown
       */
      'id' => 'QuickTime::GenMediaHeader.QuickTime:Text',
      'desc' => [
        'en' => 'Text',
        'fr' => 'Texte',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::Stream
       * line : 325249
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Stream.QuickTime:Text',
      'desc' => [
        'en' => 'Text',
        'fr' => 'Texte',
      ],
    ],
    2 => [
      /**
       * table_name : QuickTime::tx3g
       * line : 327173
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::tx3g.QuickTime:Text',
      'desc' => [
        'en' => 'Text',
        'fr' => 'Texte',
      ],
    ],
  ];

}
