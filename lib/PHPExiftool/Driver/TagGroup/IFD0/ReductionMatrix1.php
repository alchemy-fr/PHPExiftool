<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReductionMatrix1 extends AbstractTagGroup
{

  protected string $id = 'IFD0:ReductionMatrix1';

  protected string $name = 'ReductionMatrix1';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Reduction Matrix 1',
    'fr' => 'Matrice de réduction 1',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119420
       * type : rational64s
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:ReductionMatrix1',
      'desc' => [
        'en' => 'Reduction Matrix 1',
        'fr' => 'Matrice de réduction 1',
      ],
    ],
  ];

}
