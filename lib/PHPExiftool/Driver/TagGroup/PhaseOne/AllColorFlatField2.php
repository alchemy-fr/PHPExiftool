<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhaseOne;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AllColorFlatField2 extends AbstractTagGroup
{

  protected string $id = 'PhaseOne:AllColorFlatField2';

  protected string $name = 'AllColorFlatField2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'All Color Flat Field 2',
  ];

  protected int $count = 0;

  protected int $flags = 38;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhaseOne::SensorCalibration
       * line : 303979
       * type : undef
       * writable : false
       * count : 
       * flags : Binary,Permanent,Unknown
       */
      'id' => 'PhaseOne::SensorCalibration.PhaseOne:AllColorFlatField2',
      'desc' => [
        'en' => 'All Color Flat Field 2',
      ],
    ],
  ];

}
