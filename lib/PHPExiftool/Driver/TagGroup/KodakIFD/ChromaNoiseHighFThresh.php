<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChromaNoiseHighFThresh extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:ChromaNoiseHighFThresh';

  protected string $name = 'ChromaNoiseHighFThresh';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Chroma Noise High F Thresh',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156982
       * type : int32u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:ChromaNoiseHighFThresh',
      'desc' => [
        'en' => 'Chroma Noise High F Thresh',
      ],
    ],
  ];

}
