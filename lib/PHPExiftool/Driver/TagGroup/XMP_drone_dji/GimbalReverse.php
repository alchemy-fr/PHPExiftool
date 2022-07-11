<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_drone_dji;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GimbalReverse extends AbstractTagGroup
{

  protected string $id = 'XMP-drone-dji:GimbalReverse';

  protected string $name = 'GimbalReverse';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gimbal Reverse',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DJI::XMP
       * line : 105000
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'DJI::XMP.XMP-drone-dji:GimbalReverse',
      'desc' => [
        'en' => 'Gimbal Reverse',
      ],
    ],
  ];

}
