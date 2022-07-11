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
class LargestValidInteriorRectTop extends AbstractTagGroup
{

  protected string $id = 'XMP-GPano:LargestValidInteriorRectTop';

  protected string $name = 'LargestValidInteriorRectTop';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Largest Valid Interior Rect Top',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GPano
       * line : 397493
       * type : real
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GPano.XMP-GPano:LargestValidInteriorRectTop',
      'desc' => [
        'en' => 'Largest Valid Interior Rect Top',
      ],
    ],
  ];

}
