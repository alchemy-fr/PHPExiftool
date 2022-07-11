<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NumSampleFrames extends AbstractTagGroup
{

  protected string $id = 'AIFF:NumSampleFrames';

  protected string $name = 'NumSampleFrames';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Num Sample Frames',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : AIFF::Common
       * line : 95
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'AIFF::Common.AIFF:NumSampleFrames',
      'desc' => [
        'en' => 'Num Sample Frames',
      ],
    ],
  ];

}
