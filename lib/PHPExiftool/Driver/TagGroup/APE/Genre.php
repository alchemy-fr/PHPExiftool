<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\APE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Genre extends AbstractTagGroup
{

  protected string $id = 'APE:Genre';

  protected string $name = 'Genre';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Genre',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : APE::Main
       * line : 287
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APE::Main.APE:Genre',
      'desc' => [
        'en' => 'Genre',
      ],
    ],
  ];

}
