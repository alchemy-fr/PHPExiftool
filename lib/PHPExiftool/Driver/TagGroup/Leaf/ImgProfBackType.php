<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImgProfBackType extends AbstractTagGroup
{

  protected string $id = 'Leaf:ImgProfBackType';

  protected string $name = 'ImgProfBackType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Img Prof Back Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::ImageProfile
       * line : 162180
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::ImageProfile.Leaf:ImgProfBackType',
      'desc' => [
        'en' => 'Img Prof Back Type',
      ],
    ],
  ];

}
