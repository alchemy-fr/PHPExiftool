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
class VideoOrImageCompressionAlgorithm extends AbstractTagGroup
{

  protected string $id = 'MXF:VideoOrImageCompressionAlgorithm';

  protected string $name = 'VideoOrImageCompressionAlgorithm';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Or Image Compression Algorithm',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168485
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:VideoOrImageCompressionAlgorithm',
      'desc' => [
        'en' => 'Video Or Image Compression Algorithm',
      ],
    ],
  ];

}
