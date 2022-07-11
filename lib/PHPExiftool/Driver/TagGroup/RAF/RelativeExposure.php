<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RAF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RelativeExposure extends AbstractTagGroup
{

  protected string $id = 'RAF:RelativeExposure';

  protected string $name = 'RelativeExposure';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Relative Exposure',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::RAF
       * line : 131469
       * type : rational32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FujiFilm::RAF.RAF:RelativeExposure',
      'desc' => [
        'en' => 'Relative Exposure',
      ],
    ],
  ];

}
