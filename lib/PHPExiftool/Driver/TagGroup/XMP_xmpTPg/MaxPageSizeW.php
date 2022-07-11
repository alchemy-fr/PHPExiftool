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
class MaxPageSizeW extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpTPg:MaxPageSizeW';

  protected string $name = 'MaxPageSizeW';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Page Size W',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpTPg
       * line : 414877
       * type : real
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpTPg.XMP-xmpTPg:MaxPageSizeW',
      'desc' => [
        'en' => 'Max Page Size W',
      ],
    ],
  ];

}
