<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpTPg;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaxPageSizeUnit extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpTPg:MaxPageSizeUnit';

  protected string $name = 'MaxPageSizeUnit';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Page Size Unit',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpTPg
       * line : 414874
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpTPg.XMP-xmpTPg:MaxPageSizeUnit',
      'desc' => [
        'en' => 'Max Page Size Unit',
      ],
    ],
  ];

}
