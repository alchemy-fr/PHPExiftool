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
class CreatorVersion extends AbstractTagGroup
{

  protected string $id = 'PDF:CreatorVersion';

  protected string $name = 'CreatorVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Creator Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::AIPrivate
       * line : 264377
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::AIPrivate.PDF:CreatorVersion',
      'desc' => [
        'en' => 'Creator Version',
      ],
    ],
  ];

}
