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
class PhotoEffectsBlue extends AbstractTagGroup
{

  protected string $id = 'NikonCapture:PhotoEffectsBlue';

  protected string $name = 'PhotoEffectsBlue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Photo Effects Blue',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCapture::PhotoEffects
       * line : 211525
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCapture::PhotoEffects.NikonCapture:PhotoEffectsBlue',
      'desc' => [
        'en' => 'Photo Effects Blue',
      ],
    ],
  ];

}
