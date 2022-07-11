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
class MultipleExposureMode extends AbstractTagGroup
{

  protected string $id = 'Olympus:MultipleExposureMode';

  protected string $name = 'MultipleExposureMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Multiple Exposure Mode',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::ImageProcessing
       * line : 255804
       * type : int16u
       * writable : true
       * count : 2
       * flags : Permanent
       */
      'id' => 'Olympus::ImageProcessing.Olympus:MultipleExposureMode',
      'desc' => [
        'en' => 'Multiple Exposure Mode',
      ],
    ],
  ];

}
