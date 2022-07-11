<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointSelected extends AbstractTagGroup
{

  protected string $id = 'Olympus:AFPointSelected';

  protected string $name = 'AFPointSelected';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Point Selected',
    'fr' => 'Point AF sélectionné',
  ];

  protected int $count = 5;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 251133
       * type : rational64s
       * writable : true
       * count : 5
       * flags : Permanent
       */
      'id' => 'Olympus::CameraSettings.Olympus:AFPointSelected',
      'desc' => [
        'en' => 'AF Point Selected',
        'fr' => 'Point AF sélectionné',
      ],
    ],
  ];

}
