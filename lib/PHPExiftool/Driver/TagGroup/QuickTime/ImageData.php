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
class ImageData extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ImageData';

  protected string $name = 'ImageData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Data',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ImageFile
       * line : 314394
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'QuickTime::ImageFile.QuickTime:ImageData',
      'desc' => [
        'en' => 'Image Data',
      ],
    ],
  ];

}
