<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApplicationSupplierName extends AbstractTagGroup
{

  protected string $id = 'MXF:ApplicationSupplierName';

  protected string $name = 'ApplicationSupplierName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Application Supplier Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169633
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ApplicationSupplierName',
      'desc' => [
        'en' => 'Application Supplier Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 169636
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ApplicationSupplierName',
      'desc' => [
        'en' => 'Application Supplier Name',
      ],
    ],
  ];

}
