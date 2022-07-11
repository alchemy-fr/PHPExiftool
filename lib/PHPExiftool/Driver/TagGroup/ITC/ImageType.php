<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ITC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageType extends AbstractTagGroup
{

  protected string $id = 'ITC:ImageType';

  protected string $name = 'ImageType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Type',
    'fr' => 'Type d\'image',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : ITC::Item
       * line : 152479
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'ITC::Item.ITC:ImageType',
      'desc' => [
        'en' => 'Image Type',
        'fr' => 'Type d\'image',
      ],
    ],
  ];

}
