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
class VignettingCorrection extends AbstractTagGroup
{

  protected string $id = 'SubIFD:VignettingCorrection';

  protected string $name = 'VignettingCorrection';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Vignetting Correction',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113096
       * type : int16s
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.SubIFD:VignettingCorrection',
      'desc' => [
        'en' => 'Vignetting Correction',
      ],
    ],
  ];

}
