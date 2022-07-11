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
class ContrastHighlight extends AbstractTagGroup
{

  protected string $id = 'Pentax:ContrastHighlight';

  protected string $name = 'ContrastHighlight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Contrast Highlight',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 300364
       * type : int16s
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:ContrastHighlight',
      'desc' => [
        'en' => 'Contrast Highlight',
      ],
    ],
  ];

}
