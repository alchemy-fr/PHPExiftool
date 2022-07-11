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
class AnnotationSynopsis extends AbstractTagGroup
{

  protected string $id = 'MXF:AnnotationSynopsis';

  protected string $name = 'AnnotationSynopsis';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Annotation Synopsis',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171471
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AnnotationSynopsis',
      'desc' => [
        'en' => 'Annotation Synopsis',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171474
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AnnotationSynopsis',
      'desc' => [
        'en' => 'Annotation Synopsis',
      ],
    ],
  ];

}
