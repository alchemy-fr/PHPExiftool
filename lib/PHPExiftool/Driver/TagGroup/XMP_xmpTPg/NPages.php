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
class NPages extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpTPg:NPages';

  protected string $name = 'NPages';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'N Pages',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpTPg
       * line : 414880
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::xmpTPg.XMP-xmpTPg:NPages',
      'desc' => [
        'en' => 'N Pages',
      ],
    ],
  ];

}
