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
class ChromaticAberrationCorrParams extends AbstractTagGroup
{

  protected string $id = 'SubIFD:ChromaticAberrationCorrParams';

  protected string $name = 'ChromaticAberrationCorrParams';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Chromatic Aberration Corr Params',
  ];

  protected int $count = 33;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 113143
       * type : int16s
       * writable : true
       * count : 33
       * flags : Unsafe
       */
      'id' => 'Exif::Main.SubIFD:ChromaticAberrationCorrParams',
      'desc' => [
        'en' => 'Chromatic Aberration Corr Params',
      ],
    ],
  ];

}
