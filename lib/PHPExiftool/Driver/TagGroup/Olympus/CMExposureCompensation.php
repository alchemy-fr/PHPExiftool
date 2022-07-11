<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CMExposureCompensation extends AbstractTagGroup
{

  protected string $id = 'Olympus:CMExposureCompensation';

  protected string $name = 'CMExposureCompensation';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'CM Exposure Compensation',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::RawInfo
       * line : 261564
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Olympus::RawInfo.Olympus:CMExposureCompensation',
      'desc' => [
        'en' => 'CM Exposure Compensation',
      ],
    ],
  ];

}
