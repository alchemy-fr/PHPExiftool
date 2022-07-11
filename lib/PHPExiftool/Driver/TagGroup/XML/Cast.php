<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Cast extends AbstractTagGroup
{

  protected string $id = 'XML:Cast';

  protected string $name = 'Cast';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Cast',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLIST::Main
       * line : 265533
       * type : ?
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'PLIST::Main.XML:Cast',
      'desc' => [
        'en' => 'Cast',
      ],
    ],
  ];

}
