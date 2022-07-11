<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VideoNoiseReductionAlgorithm extends AbstractTagGroup
{

  protected string $id = 'MXF:VideoNoiseReductionAlgorithm';

  protected string $name = 'VideoNoiseReductionAlgorithm';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Noise Reduction Algorithm',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168495
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:VideoNoiseReductionAlgorithm',
      'desc' => [
        'en' => 'Video Noise Reduction Algorithm',
      ],
    ],
  ];

}
