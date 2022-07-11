<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Meta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrimaryItemReference extends AbstractTagGroup
{

  protected string $id = 'Meta:PrimaryItemReference';

  protected string $name = 'PrimaryItemReference';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Primary Item Reference',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Meta
       * line : 324283
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Meta.Meta:PrimaryItemReference',
      'desc' => [
        'en' => 'Primary Item Reference',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::Meta
       * line : 324286
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Meta.Meta:PrimaryItemReference',
      'desc' => [
        'en' => 'Primary Item Reference',
      ],
    ],
  ];

}
