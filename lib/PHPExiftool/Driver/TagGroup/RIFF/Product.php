<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Product extends AbstractTagGroup
{

  protected string $id = 'RIFF:Product';

  protected string $name = 'Product';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Product',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Info
       * line : 328699
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Info.RIFF:Product',
      'desc' => [
        'en' => 'Product',
      ],
    ],
    1 => [
      /**
       * table_name : RIFF::Sampler
       * line : 329042
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Sampler.RIFF:Product',
      'desc' => [
        'en' => 'Product',
      ],
    ],
  ];

}
