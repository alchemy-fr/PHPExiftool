<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CameraIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MultishotOn extends AbstractTagGroup
{

  protected string $id = 'CameraIFD:MultishotOn';

  protected string $name = 'MultishotOn';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Multishot On',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::CameraIFD
       * line : 280022
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::CameraIFD.CameraIFD:MultishotOn',
      'desc' => [
        'en' => 'Multishot On',
      ],
    ],
  ];

}
