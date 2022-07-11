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
class AutoSaveFormat extends AbstractTagGroup
{

  protected string $id = 'Photoshop:AutoSaveFormat';

  protected string $name = 'AutoSaveFormat';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Auto Save Format',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 306021
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Photoshop::Main.Photoshop:AutoSaveFormat',
      'desc' => [
        'en' => 'Auto Save Format',
      ],
    ],
  ];

}
