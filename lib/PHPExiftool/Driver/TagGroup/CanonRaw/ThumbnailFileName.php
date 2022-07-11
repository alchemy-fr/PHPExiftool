<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailFileName extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:ThumbnailFileName';

  protected string $name = 'ThumbnailFileName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Thumbnail File Name',
  ];

  protected int $count = 32;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::Main
       * line : 78713
       * type : string
       * writable : true
       * count : 32
       * flags : Permanent
       */
      'id' => 'CanonRaw::Main.CanonRaw:ThumbnailFileName',
      'desc' => [
        'en' => 'Thumbnail File Name',
      ],
    ],
  ];

}
