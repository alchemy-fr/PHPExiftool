<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorAdjustment extends AbstractTagGroup
{

  protected string $id = 'Sigma:ColorAdjustment';

  protected string $name = 'ColorAdjustment';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Adjustment',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::Main
       * line : 337714
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:ColorAdjustment',
      'desc' => [
        'en' => 'Color Adjustment',
      ],
    ],
    1 => [
      /**
       * table_name : Sigma::Main
       * line : 337723
       * type : rational64s
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sigma::Main.Sigma:ColorAdjustment',
      'desc' => [
        'en' => 'Color Adjustment',
      ],
    ],
  ];

}
