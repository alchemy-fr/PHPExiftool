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
class RawExposureBias extends AbstractTagGroup
{

  protected string $id = 'RAF:RawExposureBias';

  protected string $name = 'RawExposureBias';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Raw Exposure Bias',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::RAF
       * line : 131472
       * type : rational32s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FujiFilm::RAF.RAF:RawExposureBias',
      'desc' => [
        'en' => 'Raw Exposure Bias',
      ],
    ],
  ];

}
