<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPImage;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MPImageFlags extends AbstractTagGroup
{

  protected string $id = 'MPImage:MPImageFlags';

  protected string $name = 'MPImageFlags';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MP Image Flags',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPF::MPImage
       * line : 166498
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPF::MPImage.MPImage:MPImageFlags',
      'desc' => [
        'en' => 'MP Image Flags',
      ],
    ],
  ];

}
