<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VirtualPageUnits extends AbstractTagGroup
{

  protected string $id = 'PNG:VirtualPageUnits';

  protected string $name = 'VirtualPageUnits';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Virtual Page Units',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::VirtualPage
       * line : 273396
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PNG::VirtualPage.PNG:VirtualPageUnits',
      'desc' => [
        'en' => 'Virtual Page Units',
      ],
    ],
  ];

}
