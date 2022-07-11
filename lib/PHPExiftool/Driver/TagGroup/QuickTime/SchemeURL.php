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
class SchemeURL extends AbstractTagGroup
{

  protected string $id = 'QuickTime:SchemeURL';

  protected string $name = 'SchemeURL';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scheme URL',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::SchemeType
       * line : 324835
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::SchemeType.QuickTime:SchemeURL',
      'desc' => [
        'en' => 'Scheme URL',
      ],
    ],
  ];

}
