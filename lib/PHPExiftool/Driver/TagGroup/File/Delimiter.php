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
class Delimiter extends AbstractTagGroup
{

  protected string $id = 'File:Delimiter';

  protected string $name = 'Delimiter';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Delimiter',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Text::Main
       * line : 395071
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Text::Main.File:Delimiter',
      'desc' => [
        'en' => 'Delimiter',
      ],
    ],
  ];

}
