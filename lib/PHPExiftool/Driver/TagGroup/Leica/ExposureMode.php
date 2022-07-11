<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureMode extends AbstractTagGroup
{

  protected string $id = 'Leica:ExposureMode';

  protected string $name = 'ExposureMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Mode',
    'fr' => 'Mode d\'exposition',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica5
       * line : 275156
       * type : int8u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica5.Leica:ExposureMode',
      'desc' => [
        'en' => 'Exposure Mode',
        'fr' => 'Mode d\'exposition',
      ],
    ],
  ];

}
