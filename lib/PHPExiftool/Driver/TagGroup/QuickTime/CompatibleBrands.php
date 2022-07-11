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
class CompatibleBrands extends AbstractTagGroup
{

  protected string $id = 'QuickTime:CompatibleBrands';

  protected string $name = 'CompatibleBrands';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Compatible Brands',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::FileType
       * line : 313389
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::FileType.QuickTime:CompatibleBrands',
      'desc' => [
        'en' => 'Compatible Brands',
      ],
    ],
  ];

}
