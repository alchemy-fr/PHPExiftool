<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ActiveD_Lighting extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:ActiveD-Lighting';

  protected string $name = 'ActiveD-Lighting';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Active D-Lighting',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::Exposure
       * line : 210650
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::Exposure.NikonCapture:ActiveD-Lighting',
      'desc' => [
        'en' => 'Active D-Lighting',
      ],
    ],
  ];

}
