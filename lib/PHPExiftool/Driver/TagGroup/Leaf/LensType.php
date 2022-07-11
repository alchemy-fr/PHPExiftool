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
class LensType extends AbstractTagGroup
{

  protected string $id = 'Leaf:LensType';

  protected string $name = 'LensType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Lens Type',
    'fr' => 'Sorte d\'objectif',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::CameraSetup
       * line : 161982
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::CameraSetup.Leaf:LensType',
      'desc' => [
        'en' => 'Lens Type',
        'fr' => 'Sorte d\'objectif',
      ],
    ],
  ];

}
