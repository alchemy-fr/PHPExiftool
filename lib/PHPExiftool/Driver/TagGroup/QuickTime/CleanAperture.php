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
class CleanAperture extends AbstractTagGroup
{

  protected string $id = 'QuickTime:CleanAperture';

  protected string $name = 'CleanAperture';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Clean Aperture',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ItemPropCont
       * line : 323538
       * type : rational64s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::ItemPropCont.QuickTime:CleanAperture',
      'desc' => [
        'en' => 'Clean Aperture',
      ],
    ],
  ];

}
