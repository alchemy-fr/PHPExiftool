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
class SRHalfPressTime extends AbstractTagGroup
{

  protected string $id = 'Pentax:SRHalfPressTime';

  protected string $name = 'SRHalfPressTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'SR Half Press Time',
    'fr' => 'Temps entre mesure et déclenchement',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::SRInfo
       * line : 301992
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::SRInfo.Pentax:SRHalfPressTime',
      'desc' => [
        'en' => 'SR Half Press Time',
        'fr' => 'Temps entre mesure et déclenchement',
      ],
    ],
  ];

}
