<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AcademicField extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:AcademicField';

  protected string $name = 'AcademicField';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Academic Field',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 411073
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::prism.XMP-prism:AcademicField',
      'desc' => [
        'en' => 'Academic Field',
      ],
    ],
  ];

}
