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
class Quality extends AbstractTagGroup
{

  protected string $id = 'File:Quality';

  protected string $name = 'Quality';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Quality',
    'fr' => 'Qualité',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PGF::Main
       * line : 264853
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PGF::Main.File:Quality',
      'desc' => [
        'en' => 'Quality',
        'fr' => 'Qualité',
      ],
    ],
  ];

}
