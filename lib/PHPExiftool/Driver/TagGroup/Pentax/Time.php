<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Time extends AbstractTagGroup
{

  protected string $id = 'Pentax:Time';

  protected string $name = 'Time';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Time',
    'fr' => 'Heure',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 295575
       * type : undef
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:Time',
      'desc' => [
        'en' => 'Time',
        'fr' => 'Heure',
      ],
    ],
  ];

}
