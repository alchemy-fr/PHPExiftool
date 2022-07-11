<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IngredientsManagerVariant extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpMM:IngredientsManagerVariant';

  protected string $name = 'IngredientsManagerVariant';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Ingredients Manager Variant',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpMM
       * line : 414278
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::xmpMM.XMP-xmpMM:IngredientsManagerVariant',
      'desc' => [
        'en' => 'Ingredients Manager Variant',
      ],
    ],
  ];

}
