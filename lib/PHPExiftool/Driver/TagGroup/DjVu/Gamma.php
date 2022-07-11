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
class Gamma extends AbstractTagGroup
{

  protected string $id = 'DjVu:Gamma';

  protected string $name = 'Gamma';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gamma',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DjVu::Info
       * line : 107478
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DjVu::Info.DjVu:Gamma',
      'desc' => [
        'en' => 'Gamma',
      ],
    ],
  ];

}
