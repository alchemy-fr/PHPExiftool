<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Red;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeCreated extends AbstractTagGroup
{

  protected string $id = 'Red:TimeCreated';

  protected string $name = 'TimeCreated';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Time Created',
    'fr' => 'Heure de création',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Red::Main
       * line : 331787
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Red::Main.Red:TimeCreated',
      'desc' => [
        'en' => 'Time Created',
        'fr' => 'Heure de création',
      ],
    ],
  ];

}
