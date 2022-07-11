<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RoundTripVersion extends AbstractTagGroup
{

  protected string $id = 'PDF:RoundTripVersion';

  protected string $name = 'RoundTripVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Round Trip Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::AIPrivate
       * line : 264381
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::AIPrivate.PDF:RoundTripVersion',
      'desc' => [
        'en' => 'Round Trip Version',
      ],
    ],
  ];

}
