<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CollectionName extends AbstractTagGroup
{

  protected string $id = 'MXF:CollectionName';

  protected string $name = 'CollectionName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Collection Name',
    'fr' => 'Nom de collection',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170185
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CollectionName',
      'desc' => [
        'en' => 'Collection Name',
        'fr' => 'Nom de collection',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170190
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CollectionName',
      'desc' => [
        'en' => 'Collection Name',
        'fr' => 'Nom de collection',
      ],
    ],
  ];

}
