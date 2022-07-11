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
class ShadowProtection extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:ShadowProtection';

  protected string $name = 'ShadowProtection';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Shadow Protection',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::HighlightData
       * line : 210740
       * type : int8s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::HighlightData.NikonCapture:ShadowProtection',
      'desc' => [
        'en' => 'Shadow Protection',
      ],
    ],
  ];

}
