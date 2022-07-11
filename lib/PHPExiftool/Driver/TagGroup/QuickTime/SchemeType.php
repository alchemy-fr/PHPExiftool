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
class SchemeType extends AbstractTagGroup
{

  protected string $id = 'QuickTime:SchemeType';

  protected string $name = 'SchemeType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scheme Type',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::SchemeType
       * line : 324829
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'QuickTime::SchemeType.QuickTime:SchemeType',
      'desc' => [
        'en' => 'Scheme Type',
      ],
    ],
  ];

}
