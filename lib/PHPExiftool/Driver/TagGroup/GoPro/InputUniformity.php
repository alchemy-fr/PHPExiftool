<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InputUniformity extends AbstractTagGroup
{

  protected string $id = 'GoPro:InputUniformity';

  protected string $name = 'InputUniformity';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Input Uniformity',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::GPMF
       * line : 140159
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GoPro::GPMF.GoPro:InputUniformity',
      'desc' => [
        'en' => 'Input Uniformity',
      ],
    ],
  ];

}
