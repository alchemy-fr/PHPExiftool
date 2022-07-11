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
class MagneticField extends AbstractTagGroup
{

  protected string $id = 'QuickTime:MagneticField';

  protected string $name = 'MagneticField';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Magnetic Field',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::camm7
       * line : 326896
       * type : float
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'QuickTime::camm7.QuickTime:MagneticField',
      'desc' => [
        'en' => 'Magnetic Field',
      ],
    ],
  ];

}
