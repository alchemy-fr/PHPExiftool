<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailTest extends AbstractTagGroup
{

  protected string $id = 'Panasonic:ThumbnailTest';

  protected string $name = 'ThumbnailTest';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Thumbnail Test',
  ];

  protected int $count = 600;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Panasonic::PANA
       * line : 279125
       * type : undef
       * writable : false
       * count : 600
       * flags : Permanent
       */
      'id' => 'Panasonic::PANA.Panasonic:ThumbnailTest',
      'desc' => [
        'en' => 'Thumbnail Test',
      ],
    ],
  ];

}
