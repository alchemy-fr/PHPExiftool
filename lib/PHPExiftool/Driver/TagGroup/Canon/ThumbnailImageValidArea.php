<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImageValidArea extends AbstractTagGroup
{

  protected string $id = 'Canon:ThumbnailImageValidArea';

  protected string $name = 'ThumbnailImageValidArea';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Thumbnail Image Valid Area',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 65699
       * type : int16u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'Canon::Main.Canon:ThumbnailImageValidArea',
      'desc' => [
        'en' => 'Thumbnail Image Valid Area',
      ],
    ],
  ];

}
