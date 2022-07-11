<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Lytro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureTime extends AbstractTagGroup
{

  protected string $id = 'Lytro:ExposureTime';

  protected string $name = 'ExposureTime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Exposure Time',
    'fr' => 'Temps de pose',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Lytro::Main
       * line : 162666
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Lytro::Main.Lytro:ExposureTime',
      'desc' => [
        'en' => 'Exposure Time',
        'fr' => 'Temps de pose',
      ],
    ],
  ];

}
