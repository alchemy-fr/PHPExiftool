<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InputDeviceSerialNumber extends AbstractTagGroup
{

  protected string $id = 'File:InputDeviceSerialNumber';

  protected string $name = 'InputDeviceSerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Input Device Serial Number',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 106225
       * type : string
       * writable : false
       * count : 32
       * flags : 
       */
      'id' => 'DPX::Main.File:InputDeviceSerialNumber',
      'desc' => [
        'en' => 'Input Device Serial Number',
      ],
    ],
  ];

}
