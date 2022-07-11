<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraOrientation extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:CameraOrientation';

  protected string $name = 'CameraOrientation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Camera Orientation',
    'fr' => 'Orientation de l\'image',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::Main
       * line : 303465
       * type : int32s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'PhaseOne::Main.PhaseOne:CameraOrientation',
      'desc' => [
        'en' => 'Camera Orientation',
        'fr' => 'Orientation de l\'image',
      ],
    ],
  ];

}
