<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nintendo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Category extends AbstractTagGroup
{

  protected string $id = 'Nintendo:Category';

  protected string $name = 'Category';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Category',
    'fr' => 'Catégorie',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nintendo::CameraInfo
       * line : 249346
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nintendo::CameraInfo.Nintendo:Category',
      'desc' => [
        'en' => 'Category',
        'fr' => 'Catégorie',
      ],
    ],
  ];

}
