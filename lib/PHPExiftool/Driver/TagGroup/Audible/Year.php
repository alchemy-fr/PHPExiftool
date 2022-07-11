<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Audible;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Year extends AbstractTagGroup
{

  protected string $id = 'Audible:Year';

  protected string $name = 'Year';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Year',
    'fr' => 'Année',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Audible::meta
       * line : 3136
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Audible::meta.Audible:Year',
      'desc' => [
        'en' => 'Year',
        'fr' => 'Année',
      ],
    ],
  ];

}
