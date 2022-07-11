<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TrackOffset extends AbstractTagGroup
{

  protected string $id = 'Matroska:TrackOffset';

  protected string $name = 'TrackOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Track Offset',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 173987
       * type : signed
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'Matroska::Main.Matroska:TrackOffset',
      'desc' => [
        'en' => 'Track Offset',
      ],
    ],
  ];

}
