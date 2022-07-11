<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Manufacturer extends AbstractTagGroup
{

  protected string $id = 'File:Manufacturer';

  protected string $name = 'Manufacturer';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Manufacturer',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PCX::Main
       * line : 264178
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PCX::Main.File:Manufacturer',
      'desc' => [
        'en' => 'Manufacturer',
      ],
    ],
  ];

}
