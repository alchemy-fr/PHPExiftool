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
class LensID extends AbstractTagGroup
{

  protected string $id = 'Leaf:LensID';

  protected string $name = 'LensID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Lens ID',
    'fr' => 'ID Lens',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::CameraSetup
       * line : 161970
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::CameraSetup.Leaf:LensID',
      'desc' => [
        'en' => 'Lens ID',
        'fr' => 'ID Lens',
      ],
    ],
  ];

}
