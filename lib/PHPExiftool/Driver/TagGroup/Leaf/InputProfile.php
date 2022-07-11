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
class InputProfile extends AbstractTagGroup
{

  protected string $id = 'Leaf:InputProfile';

  protected string $name = 'InputProfile';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Input Profile',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::ColorSetup
       * line : 162155
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::ColorSetup.Leaf:InputProfile',
      'desc' => [
        'en' => 'Input Profile',
      ],
    ],
  ];

}
