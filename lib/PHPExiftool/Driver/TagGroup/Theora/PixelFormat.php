<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Theora;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PixelFormat extends AbstractTagGroup
{

  protected string $id = 'Theora:PixelFormat';

  protected string $name = 'PixelFormat';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Pixel Format',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Theora::Identification
       * line : 395265
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Theora::Identification.Theora:PixelFormat',
      'desc' => [
        'en' => 'Pixel Format',
      ],
    ],
  ];

}
