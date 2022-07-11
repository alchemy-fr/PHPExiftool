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
class SensitivityValue extends AbstractTagGroup
{

  protected string $id = 'CameraIFD:SensitivityValue';

  protected string $name = 'SensitivityValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sensitivity Value',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PanasonicRaw::CameraIFD
       * line : 280147
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PanasonicRaw::CameraIFD.CameraIFD:SensitivityValue',
      'desc' => [
        'en' => 'Sensitivity Value',
      ],
    ],
  ];

}
