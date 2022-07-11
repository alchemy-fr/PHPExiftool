<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Time extends AbstractTagGroup
{

  protected string $id = 'Flash:Time';

  protected string $name = 'Time';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Time',
    'fr' => 'Heure',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Flash::CuePoint
       * line : 124215
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Flash::CuePoint.Flash:Time',
      'desc' => [
        'en' => 'Time',
        'fr' => 'Heure',
      ],
    ],
  ];

}
