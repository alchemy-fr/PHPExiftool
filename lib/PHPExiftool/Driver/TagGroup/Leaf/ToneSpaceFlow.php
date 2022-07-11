<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneSpaceFlow extends AbstractTagGroup
{

  protected string $id = 'Leaf:ToneSpaceFlow';

  protected string $name = 'ToneSpaceFlow';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'ICC To Tone Space Flow',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Leaf::Main
       * line : 162245
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Leaf::Main.Leaf:ToneSpaceFlow',
      'desc' => [
        'en' => 'ICC To Tone Space Flow',
      ],
    ],
  ];

}
