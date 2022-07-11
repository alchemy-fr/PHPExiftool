<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class URL extends AbstractTagGroup
{

  protected string $id = 'Photoshop:URL';

  protected string $name = 'URL';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'URL',
    'fr' => 'URL',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 305856
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::Main.Photoshop:URL',
      'desc' => [
        'en' => 'URL',
        'fr' => 'URL',
      ],
    ],
  ];

}
