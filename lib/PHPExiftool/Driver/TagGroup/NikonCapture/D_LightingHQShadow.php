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
class D_LightingHQShadow extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:D-LightingHQShadow';

  protected string $name = 'D-LightingHQShadow';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'D-Lighting HQ Shadow',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::DLightingHQ
       * line : 210605
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::DLightingHQ.NikonCapture:D-LightingHQShadow',
      'desc' => [
        'en' => 'D-Lighting HQ Shadow',
      ],
    ],
  ];

}
