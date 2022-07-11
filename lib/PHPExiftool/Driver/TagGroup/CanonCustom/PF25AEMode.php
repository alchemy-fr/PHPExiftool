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
class PF25AEMode extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:PF25AEMode';

  protected string $name = 'PF25AEMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'PF25 AE Mode',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::PersonalFuncValues
       * line : 78316
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::PersonalFuncValues.CanonCustom:PF25AEMode',
      'desc' => [
        'en' => 'PF25 AE Mode',
      ],
    ],
  ];

}
