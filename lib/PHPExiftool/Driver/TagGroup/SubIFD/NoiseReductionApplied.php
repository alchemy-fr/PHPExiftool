<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NoiseReductionApplied extends AbstractTagGroup
{

  protected string $id = 'SubIFD:NoiseReductionApplied';

  protected string $name = 'NoiseReductionApplied';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Noise Reduction Applied',
    'fr' => 'Réduction de bruit appliquée',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120431
       * type : rational64u
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.SubIFD:NoiseReductionApplied',
      'desc' => [
        'en' => 'Noise Reduction Applied',
        'fr' => 'Réduction de bruit appliquée',
      ],
    ],
  ];

}
