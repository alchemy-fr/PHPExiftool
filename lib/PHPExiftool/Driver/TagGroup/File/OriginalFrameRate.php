<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalFrameRate extends AbstractTagGroup
{

  protected string $id = 'File:OriginalFrameRate';

  protected string $name = 'OriginalFrameRate';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Original Frame Rate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 106235
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DPX::Main.File:OriginalFrameRate',
      'desc' => [
        'en' => 'Original Frame Rate',
      ],
    ],
  ];

}
