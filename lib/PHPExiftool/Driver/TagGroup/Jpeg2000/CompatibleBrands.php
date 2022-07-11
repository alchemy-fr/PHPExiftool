<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Jpeg2000;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompatibleBrands extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:CompatibleBrands';

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
       * table_name : Jpeg2000::FileType
       * line : 154314
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Jpeg2000::FileType.Jpeg2000:CompatibleBrands',
      'desc' => [
        'en' => 'Compatible Brands',
      ],
    ],
  ];

}
