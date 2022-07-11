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
class PurchaserAccountName extends AbstractTagGroup
{

  protected string $id = 'MXF:PurchaserAccountName';

  protected string $name = 'PurchaserAccountName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Purchaser Account Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 170983
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PurchaserAccountName',
      'desc' => [
        'en' => 'Purchaser Account Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170987
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PurchaserAccountName',
      'desc' => [
        'en' => 'Purchaser Account Name',
      ],
    ],
  ];

}
