<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorToneAdj extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:ColorToneAdj';

  protected string $name = 'ColorToneAdj';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Tone Adj',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80483
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:ColorToneAdj',
      'desc' => [
        'en' => 'Color Tone Adj',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver1
       * line : 82430
       * type : int32s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver1.CanonVRD:ColorToneAdj',
      'desc' => [
        'en' => 'Color Tone Adj',
      ],
    ],
  ];

}
