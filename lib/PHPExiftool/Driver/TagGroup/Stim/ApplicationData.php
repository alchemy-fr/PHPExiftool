<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Stim;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApplicationData extends AbstractTagGroup
{

  protected string $id = 'Stim:ApplicationData';

  protected string $name = 'ApplicationData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Application Data',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : Stim::Main
       * line : 394920
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'Stim::Main.Stim:ApplicationData',
      'desc' => [
        'en' => 'Application Data',
      ],
    ],
  ];

}
