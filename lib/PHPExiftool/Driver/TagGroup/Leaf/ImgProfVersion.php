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
class ImgProfVersion extends AbstractTagGroup
{

  protected string $id = 'Leaf:ImgProfVersion';

  protected string $name = 'ImgProfVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Img Prof Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::ImageProfile
       * line : 162196
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::ImageProfile.Leaf:ImgProfVersion',
      'desc' => [
        'en' => 'Img Prof Version',
      ],
    ],
  ];

}
