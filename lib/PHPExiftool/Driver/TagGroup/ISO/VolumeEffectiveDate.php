<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ISO;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VolumeEffectiveDate extends AbstractTagGroup
{

  protected string $id = 'ISO:VolumeEffectiveDate';

  protected string $name = 'VolumeEffectiveDate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Volume Effective Date',
  ];

  protected int $count = 17;

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::PrimaryVolume
       * line : 152426
       * type : undef
       * writable : false
       * count : 17
       * flags : 
       */
      'id' => 'ISO::PrimaryVolume.ISO:VolumeEffectiveDate',
      'desc' => [
        'en' => 'Volume Effective Date',
      ],
    ],
  ];

}
