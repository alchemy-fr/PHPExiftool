<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProjectionPrivate extends AbstractTagGroup
{

  protected string $id = 'Matroska:ProjectionPrivate';

  protected string $name = 'ProjectionPrivate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Projection Private',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Projection
       * line : 174390
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'Matroska::Projection.Matroska:ProjectionPrivate',
      'desc' => [
        'en' => 'Projection Private',
      ],
    ],
  ];

}
