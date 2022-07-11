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
class AnnotationUsageRights extends AbstractTagGroup
{

  protected string $id = 'PDF:AnnotationUsageRights';

  protected string $name = 'AnnotationUsageRights';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Annotation Usage Rights',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::TransformParams
       * line : 264746
       * type : ?
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'PDF::TransformParams.PDF:AnnotationUsageRights',
      'desc' => [
        'en' => 'Annotation Usage Rights',
      ],
    ],
  ];

}
