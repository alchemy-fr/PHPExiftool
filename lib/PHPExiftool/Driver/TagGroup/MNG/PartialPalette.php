<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PartialPalette extends AbstractTagGroup
{

  protected string $id = 'MNG:PartialPalette';

  protected string $name = 'PartialPalette';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Partial Palette',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::Main
       * line : 165554
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'MNG::Main.MNG:PartialPalette',
      'desc' => [
        'en' => 'Partial Palette',
      ],
    ],
  ];

}
