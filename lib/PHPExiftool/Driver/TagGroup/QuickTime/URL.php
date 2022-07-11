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
class URL extends AbstractTagGroup
{

  protected string $id = 'QuickTime:URL';

  protected string $name = 'URL';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'URL',
    'fr' => 'URL',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::DataRef
       * line : 312952
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::DataRef.QuickTime:URL',
      'desc' => [
        'en' => 'URL',
        'fr' => 'URL',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::DataRef
       * line : 312956
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::DataRef.QuickTime:URL',
      'desc' => [
        'en' => 'URL',
        'fr' => 'URL',
      ],
    ],
  ];

}
