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
class PreviewInfo extends AbstractTagGroup
{

  protected string $id = 'Leaf:PreviewInfo';

  protected string $name = 'PreviewInfo';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Preview Info',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::Main
       * line : 162232
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::Main.Leaf:PreviewInfo',
      'desc' => [
        'en' => 'Preview Info',
      ],
    ],
  ];

}
