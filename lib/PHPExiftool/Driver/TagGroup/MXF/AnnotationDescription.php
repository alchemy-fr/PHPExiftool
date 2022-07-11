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
class AnnotationDescription extends AbstractTagGroup
{

  protected string $id = 'MXF:AnnotationDescription';

  protected string $name = 'AnnotationDescription';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Annotation Description',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171477
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AnnotationDescription',
      'desc' => [
        'en' => 'Annotation Description',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171480
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AnnotationDescription',
      'desc' => [
        'en' => 'Annotation Description',
      ],
    ],
  ];

}
