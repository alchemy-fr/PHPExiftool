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
class AFAssist extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:AFAssist';

  protected string $name = 'AFAssist';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Assist/Flash Firing',
    'fr' => 'Faisceau d\'assistance AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions10D
       * line : 71429
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions10D.CanonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist/Flash Firing',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
    1 => [
      /**
       * table_name : CanonCustom::FunctionsD30
       * line : 77992
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::FunctionsD30.CanonCustom:AFAssist',
      'desc' => [
        'en' => 'AF Assist',
        'fr' => 'Faisceau d\'assistance AF',
      ],
    ],
  ];

}
