<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DjVu;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Orientation extends AbstractTagGroup
{

  protected string $id = 'DjVu:Orientation';

  protected string $name = 'Orientation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Orientation',
    'fr' => 'Orientation de l\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DjVu::Info
       * line : 107486
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DjVu::Info.DjVu:Orientation',
      'desc' => [
        'en' => 'Orientation',
        'fr' => 'Orientation de l\'image',
      ],
    ],
  ];

}
