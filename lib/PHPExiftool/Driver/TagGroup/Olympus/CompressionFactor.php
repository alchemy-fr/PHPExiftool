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
class CompressionFactor extends AbstractTagGroup
{

  protected string $id = 'Olympus:CompressionFactor';

  protected string $name = 'CompressionFactor';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Compression Factor',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::CameraSettings
       * line : 252126
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::CameraSettings.Olympus:CompressionFactor',
      'desc' => [
        'en' => 'Compression Factor',
      ],
    ],
  ];

}
