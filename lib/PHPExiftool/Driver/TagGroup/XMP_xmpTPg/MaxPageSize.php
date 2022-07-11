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
class MaxPageSize extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpTPg:MaxPageSize';

  protected string $name = 'MaxPageSize';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Page Size',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpTPg
       * line : 414868
       * type : struct
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::xmpTPg.XMP-xmpTPg:MaxPageSize',
      'desc' => [
        'en' => 'Max Page Size',
      ],
    ],
  ];

}
