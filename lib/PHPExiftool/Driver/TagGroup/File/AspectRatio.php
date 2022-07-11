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
class AspectRatio extends AbstractTagGroup
{

  protected string $id = 'File:AspectRatio';

  protected string $name = 'AspectRatio';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Aspect Ratio',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 106229
       * type : int32u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'DPX::Main.File:AspectRatio',
      'desc' => [
        'en' => 'Aspect Ratio',
      ],
    ],
  ];

}
