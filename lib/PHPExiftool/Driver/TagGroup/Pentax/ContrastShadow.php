<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContrastShadow extends AbstractTagGroup
{

  protected string $id = 'Pentax:ContrastShadow';

  protected string $name = 'ContrastShadow';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Contrast Shadow',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 300396
       * type : int16s
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:ContrastShadow',
      'desc' => [
        'en' => 'Contrast Shadow',
      ],
    ],
  ];

}
