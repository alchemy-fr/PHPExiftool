<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AsShotWhiteXY extends AbstractTagGroup
{

  protected string $id = 'IFD0:AsShotWhiteXY';

  protected string $name = 'AsShotWhiteXY';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'As Shot White XY',
    'fr' => 'Balance blanc X-Y à la prise de vue',
  ];

  protected int $count = 2;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119460
       * type : rational64u
       * writable : true
       * count : 2
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:AsShotWhiteXY',
      'desc' => [
        'en' => 'As Shot White XY',
        'fr' => 'Balance blanc X-Y à la prise de vue',
      ],
    ],
  ];

}
