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
class GrayResponseUnit extends AbstractTagGroup
{

  protected string $id = 'IFD0:GrayResponseUnit';

  protected string $name = 'GrayResponseUnit';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Gray Response Unit',
    'fr' => 'Unité de réponse en gris',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111454
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:GrayResponseUnit',
      'desc' => [
        'en' => 'Gray Response Unit',
        'fr' => 'Unité de réponse en gris',
      ],
    ],
  ];

}
