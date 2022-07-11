<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PF10RetainProgramShift extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:PF10RetainProgramShift';

  protected string $name = 'PF10RetainProgramShift';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'PF10 Retain Program Shift',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::PersonalFuncs
       * line : 78383
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::PersonalFuncs.CanonCustom:PF10RetainProgramShift',
      'desc' => [
        'en' => 'PF10 Retain Program Shift',
      ],
    ],
  ];

}
