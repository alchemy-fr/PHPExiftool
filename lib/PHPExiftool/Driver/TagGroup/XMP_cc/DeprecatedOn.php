<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_cc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DeprecatedOn extends AbstractTagGroup
{

  protected string $id = 'XMP-cc:DeprecatedOn';

  protected string $name = 'DeprecatedOn';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Deprecated On',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::cc
       * line : 398421
       * type : date
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::cc.XMP-cc:DeprecatedOn',
      'desc' => [
        'en' => 'Deprecated On',
      ],
    ],
  ];

}
