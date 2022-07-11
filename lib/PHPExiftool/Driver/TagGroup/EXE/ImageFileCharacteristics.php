<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageFileCharacteristics extends AbstractTagGroup
{

  protected string $id = 'EXE:ImageFileCharacteristics';

  protected string $name = 'ImageFileCharacteristics';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image File Characteristics',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::Main
       * line : 109146
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::Main.EXE:ImageFileCharacteristics',
      'desc' => [
        'en' => 'Image File Characteristics',
      ],
    ],
  ];

}
