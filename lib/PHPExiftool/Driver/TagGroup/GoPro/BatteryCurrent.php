<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BatteryCurrent extends AbstractTagGroup
{

  protected string $id = 'GoPro:BatteryCurrent';

  protected string $name = 'BatteryCurrent';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Battery Current',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GoPro::KBAT
       * line : 140327
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'GoPro::KBAT.GoPro:BatteryCurrent',
      'desc' => [
        'en' => 'Battery Current',
      ],
    ],
  ];

}
