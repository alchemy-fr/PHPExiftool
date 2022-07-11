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
class ColorMatrixA extends AbstractTagGroup
{

  protected string $id = 'Pentax:ColorMatrixA';

  protected string $name = 'ColorMatrixA';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Matrix A',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 301050
       * type : int16s
       * writable : true
       * count : 9
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:ColorMatrixA',
      'desc' => [
        'en' => 'Color Matrix A',
      ],
    ],
  ];

}
