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
class ImgProfType extends AbstractTagGroup
{

  protected string $id = 'Leaf:ImgProfType';

  protected string $name = 'ImgProfType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Img Prof Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::ImageProfile
       * line : 162193
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::ImageProfile.Leaf:ImgProfType',
      'desc' => [
        'en' => 'Img Prof Type',
      ],
    ],
  ];

}
