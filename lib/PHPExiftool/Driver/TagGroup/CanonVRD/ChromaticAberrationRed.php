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
class ChromaticAberrationRed extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:ChromaticAberrationRed';

  protected string $name = 'ChromaticAberrationRed';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Chromatic Aberration Red',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::DR4
       * line : 80704
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::DR4.CanonVRD:ChromaticAberrationRed',
      'desc' => [
        'en' => 'Chromatic Aberration Red',
      ],
    ],
    1 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83513
       * type : int16s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:ChromaticAberrationRed',
      'desc' => [
        'en' => 'Chromatic Aberration Red',
      ],
    ],
  ];

}
