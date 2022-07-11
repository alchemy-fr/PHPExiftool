<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SVG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ID extends AbstractTagGroup
{

  protected string $id = 'SVG:ID';

  protected string $name = 'ID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::SVG
       * line : 397885
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'XMP::SVG.SVG:ID',
      'desc' => [
        'en' => 'ID',
      ],
    ],
  ];

}
