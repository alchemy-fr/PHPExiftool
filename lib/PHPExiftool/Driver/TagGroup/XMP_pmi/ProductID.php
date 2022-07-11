<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_pmi;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProductID extends AbstractTagGroup
{

  protected string $id = 'XMP-pmi:ProductID';

  protected string $name = 'ProductID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Product ID',
    'fr' => 'ID de produit',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::pmi
       * line : 411000
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::pmi.XMP-pmi:ProductID',
      'desc' => [
        'en' => 'Product ID',
        'fr' => 'ID de produit',
      ],
    ],
  ];

}
