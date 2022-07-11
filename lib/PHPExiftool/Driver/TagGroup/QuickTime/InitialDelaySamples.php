<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InitialDelaySamples extends AbstractTagGroup
{

  protected string $id = 'QuickTime:InitialDelaySamples';

  protected string $name = 'InitialDelaySamples';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Initial Delay Samples',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::AV1Config
       * line : 310687
       * type : int8u
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'QuickTime::AV1Config.QuickTime:InitialDelaySamples',
      'desc' => [
        'en' => 'Initial Delay Samples',
      ],
    ],
  ];

}
