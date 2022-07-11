<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PostScript;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageData extends AbstractTagGroup
{

  protected string $id = 'PostScript:ImageData';

  protected string $name = 'ImageData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Image Data',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PostScript::Main
       * line : 306359
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PostScript::Main.PostScript:ImageData',
      'desc' => [
        'en' => 'Image Data',
      ],
    ],
  ];

}
