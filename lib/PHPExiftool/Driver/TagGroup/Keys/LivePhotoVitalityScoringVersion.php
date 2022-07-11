<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Keys;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LivePhotoVitalityScoringVersion extends AbstractTagGroup
{

  protected string $id = 'Keys:LivePhotoVitalityScoringVersion';

  protected string $name = 'LivePhotoVitalityScoringVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Live Photo Vitality Scoring Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Keys
       * line : 323799
       * type : int64s
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Keys.Keys:LivePhotoVitalityScoringVersion',
      'desc' => [
        'en' => 'Live Photo Vitality Scoring Version',
      ],
    ],
  ];

}
