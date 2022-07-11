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
class Custom7 extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:Custom7';

  protected string $name = 'Custom7';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Custom 7',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 265694
       * type : lang-alt
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'PLUS::XMP.XMP-plus:Custom7',
      'desc' => [
        'en' => 'Custom 7',
      ],
    ],
  ];

}
