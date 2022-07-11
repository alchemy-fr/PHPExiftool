<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AnamorphicLensCharacteristic extends AbstractTagGroup
{

  protected string $id = 'MXF:AnamorphicLensCharacteristic';

  protected string $name = 'AnamorphicLensCharacteristic';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Anamorphic Lens Characteristic',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169609
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AnamorphicLensCharacteristic',
      'desc' => [
        'en' => 'Anamorphic Lens Characteristic',
      ],
    ],
  ];

}
