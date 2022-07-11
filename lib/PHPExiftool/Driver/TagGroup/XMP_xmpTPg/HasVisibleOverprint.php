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
class HasVisibleOverprint extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpTPg:HasVisibleOverprint';

  protected string $name = 'HasVisibleOverprint';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Has Visible Overprint',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpTPg
       * line : 414862
       * type : boolean
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::xmpTPg.XMP-xmpTPg:HasVisibleOverprint',
      'desc' => [
        'en' => 'Has Visible Overprint',
      ],
    ],
  ];

}
