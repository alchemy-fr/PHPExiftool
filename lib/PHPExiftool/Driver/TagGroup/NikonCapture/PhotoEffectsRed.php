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
class PhotoEffectsRed extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:PhotoEffectsRed';

  protected string $name = 'PhotoEffectsRed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Photo Effects Red',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::PhotoEffects
       * line : 211515
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::PhotoEffects.NikonCapture:PhotoEffectsRed',
      'desc' => [
        'en' => 'Photo Effects Red',
      ],
    ],
  ];

}
