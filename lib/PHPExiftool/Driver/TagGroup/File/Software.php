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
class Software extends AbstractTagGroup
{

  protected string $id = 'File:Software';

  protected string $name = 'Software';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Software',
    'fr' => 'Logiciel',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PCX::Main
       * line : 264187
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PCX::Main.File:Software',
      'desc' => [
        'en' => 'Software',
        'fr' => 'Logiciel',
      ],
    ],
  ];

}
