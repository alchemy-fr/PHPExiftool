<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Custom6 extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:Custom6';

  protected string $name = 'Custom6';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Custom 6',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 265690
       * type : lang-alt
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'PLUS::XMP.XMP-plus:Custom6',
      'desc' => [
        'en' => 'Custom 6',
      ],
    ],
  ];

}
