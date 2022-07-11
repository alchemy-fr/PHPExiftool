<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_extensis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RoutedTo extends AbstractTagGroup
{

  protected string $id = 'XMP-extensis:RoutedTo';

  protected string $name = 'RoutedTo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Routed To',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::extensis
       * line : 409128
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::extensis.XMP-extensis:RoutedTo',
      'desc' => [
        'en' => 'Routed To',
      ],
    ],
  ];

}
