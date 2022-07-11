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
class ColorMatrixB2 extends AbstractTagGroup
{

  protected string $id = 'Pentax:ColorMatrixB2';

  protected string $name = 'ColorMatrixB2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Matrix B2',
  ];

  protected int $count = 9;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 301157
       * type : undef
       * writable : true
       * count : 9
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:ColorMatrixB2',
      'desc' => [
        'en' => 'Color Matrix B2',
      ],
    ],
  ];

}
