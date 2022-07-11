<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GPano;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LargestValidInteriorRectLeft extends AbstractTagGroup
{

  protected string $id = 'XMP-GPano:LargestValidInteriorRectLeft';

  protected string $name = 'LargestValidInteriorRectLeft';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Largest Valid Interior Rect Left',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GPano
       * line : 397489
       * type : real
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GPano.XMP-GPano:LargestValidInteriorRectLeft',
      'desc' => [
        'en' => 'Largest Valid Interior Rect Left',
      ],
    ],
  ];

}
