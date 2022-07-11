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
class DistortionCorrection extends AbstractTagGroup
{

  protected string $id = 'SubIFD:DistortionCorrection';

  protected string $name = 'DistortionCorrection';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Distortion Correction',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113147
       * type : int16s
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.SubIFD:DistortionCorrection',
      'desc' => [
        'en' => 'Distortion Correction',
      ],
    ],
  ];

}
