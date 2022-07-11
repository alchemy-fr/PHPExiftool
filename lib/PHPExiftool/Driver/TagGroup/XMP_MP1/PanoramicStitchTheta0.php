<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_MP1;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PanoramicStitchTheta0 extends AbstractTagGroup
{

  protected string $id = 'XMP-MP1:PanoramicStitchTheta0';

  protected string $name = 'PanoramicStitchTheta0';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Panoramic Stitch Theta 0',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::MP1
       * line : 174557
       * type : real
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Microsoft::MP1.XMP-MP1:PanoramicStitchTheta0',
      'desc' => [
        'en' => 'Panoramic Stitch Theta 0',
      ],
    ],
  ];

}
