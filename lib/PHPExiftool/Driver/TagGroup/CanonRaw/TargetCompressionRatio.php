<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TargetCompressionRatio extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:TargetCompressionRatio';

  protected string $name = 'TargetCompressionRatio';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Target Compression Ratio',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::ImageFormat
       * line : 78563
       * type : float
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonRaw::ImageFormat.CanonRaw:TargetCompressionRatio',
      'desc' => [
        'en' => 'Target Compression Ratio',
      ],
    ],
  ];

}
