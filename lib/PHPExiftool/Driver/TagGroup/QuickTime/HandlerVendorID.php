<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HandlerVendorID extends AbstractTagGroup
{

  protected string $id = 'QuickTime:HandlerVendorID';

  protected string $name = 'HandlerVendorID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Handler Vendor ID',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Handler
       * line : 313986
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'QuickTime::Handler.QuickTime:HandlerVendorID',
      'desc' => [
        'en' => 'Handler Vendor ID',
      ],
    ],
  ];

}
