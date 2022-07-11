<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MWG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class State extends AbstractTagGroup
{

  protected string $id = 'MWG:State';

  protected string $name = 'State';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'State',
    'fr' => 'État / Région',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 91086
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Composite.MWG:State',
      'desc' => [
        'en' => 'State',
        'fr' => 'État / Région',
      ],
    ],
  ];

}
