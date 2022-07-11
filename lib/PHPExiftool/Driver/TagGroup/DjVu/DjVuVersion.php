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
class DjVuVersion extends AbstractTagGroup
{

  protected string $id = 'DjVu:DjVuVersion';

  protected string $name = 'DjVuVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'DjVu Version',
    'fr' => 'Version DjVu',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : DjVu::Info
       * line : 107463
       * type : int8u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'DjVu::Info.DjVu:DjVuVersion',
      'desc' => [
        'en' => 'DjVu Version',
        'fr' => 'Version DjVu',
      ],
    ],
  ];

}
