<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OtherSerialNumber extends AbstractTagGroup
{

  protected string $id = 'GoPro:OtherSerialNumber';

  protected string $name = 'OtherSerialNumber';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Other Serial Number',
  ];

  protected int $count = 15;

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::fdsc
       * line : 140430
       * type : string
       * writable : false
       * count : 15
       * flags : 
       */
      'id' => 'GoPro::fdsc.GoPro:OtherSerialNumber',
      'desc' => [
        'en' => 'Other Serial Number',
      ],
    ],
  ];

}
