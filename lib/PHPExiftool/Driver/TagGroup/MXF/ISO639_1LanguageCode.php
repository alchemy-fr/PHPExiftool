<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISO639_1LanguageCode extends AbstractTagGroup
{

  protected string $id = 'MXF:ISO639-1LanguageCode';

  protected string $name = 'ISO639-1LanguageCode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'ISO639-1 Language Code',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167934
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ISO639-1LanguageCode',
      'desc' => [
        'en' => 'ISO639-1 Language Code',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 172391
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ISO639-1LanguageCode',
      'desc' => [
        'en' => 'ISO639-1 Language Code',
      ],
    ],
  ];

}
