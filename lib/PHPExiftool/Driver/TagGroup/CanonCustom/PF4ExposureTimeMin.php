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
class PF4ExposureTimeMin extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:PF4ExposureTimeMin';

  protected string $name = 'PF4ExposureTimeMin';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'PF4 Exposure Time Min',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::PersonalFuncValues
       * line : 78283
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::PersonalFuncValues.CanonCustom:PF4ExposureTimeMin',
      'desc' => [
        'en' => 'PF4 Exposure Time Min',
      ],
    ],
  ];

}
