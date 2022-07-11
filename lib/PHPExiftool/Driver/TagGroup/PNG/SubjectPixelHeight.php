<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubjectPixelHeight extends AbstractTagGroup
{

  protected string $id = 'PNG:SubjectPixelHeight';

  protected string $name = 'SubjectPixelHeight';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Subject Pixel Height',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::SubjectScale
       * line : 273134
       * type : var_string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PNG::SubjectScale.PNG:SubjectPixelHeight',
      'desc' => [
        'en' => 'Subject Pixel Height',
      ],
    ],
  ];

}
