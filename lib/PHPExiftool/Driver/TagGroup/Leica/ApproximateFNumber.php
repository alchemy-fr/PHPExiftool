<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApproximateFNumber extends AbstractTagGroup
{

  protected string $id = 'Leica:ApproximateFNumber';

  protected string $name = 'ApproximateFNumber';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Approximate F Number',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::Leica2
       * line : 275016
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Leica2.Leica:ApproximateFNumber',
      'desc' => [
        'en' => 'Approximate F Number',
      ],
    ],
    1 => [
      /**
       * table_name : Panasonic::Subdir
       * line : 279982
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Panasonic::Subdir.Leica:ApproximateFNumber',
      'desc' => [
        'en' => 'Approximate F Number',
      ],
    ],
  ];

}
