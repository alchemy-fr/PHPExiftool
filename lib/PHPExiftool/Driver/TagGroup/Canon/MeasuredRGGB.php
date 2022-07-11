<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MeasuredRGGB extends AbstractTagGroup
{

  protected string $id = 'Canon:MeasuredRGGB';

  protected string $name = 'MeasuredRGGB';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Measured RGGB',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::MeasuredColor
       * line : 66447
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::MeasuredColor.Canon:MeasuredRGGB',
      'desc' => [
        'en' => 'Measured RGGB',
      ],
    ],
  ];

}
