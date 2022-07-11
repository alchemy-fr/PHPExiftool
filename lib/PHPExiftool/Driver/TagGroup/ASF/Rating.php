<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Rating extends AbstractTagGroup
{

  protected string $id = 'ASF:Rating';

  protected string $name = 'Rating';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Rating',
    'fr' => 'Évaluation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::ContentDescr
       * line : 1001
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::ContentDescr.ASF:Rating',
      'desc' => [
        'en' => 'Rating',
        'fr' => 'Évaluation',
      ],
    ],
    1 => [
      /**
       * table_name : ASF::ExtendedDescr
       * line : 1553
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::ExtendedDescr.ASF:Rating',
      'desc' => [
        'en' => 'Rating',
        'fr' => 'Évaluation',
      ],
    ],
  ];

}
