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
class CleanApertureOffsetX extends AbstractTagGroup
{

  protected string $id = 'QuickTime:CleanApertureOffsetX';

  protected string $name = 'CleanApertureOffsetX';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Clean Aperture Offset X',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::CleanAperture
       * line : 312942
       * type : rational64s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::CleanAperture.QuickTime:CleanApertureOffsetX',
      'desc' => [
        'en' => 'Clean Aperture Offset X',
      ],
    ],
  ];

}
