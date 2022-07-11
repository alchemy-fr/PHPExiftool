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
class ResolutionUnit extends AbstractTagGroup
{

  protected string $id = 'IFD0:ResolutionUnit';

  protected string $name = 'ResolutionUnit';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Resolution Unit',
    'fr' => 'Unité de résolution en X et Y',
  ];

  protected int $count = 0;

  protected int $flags = 128;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111584
       * type : int16u
       * writable : true
       * count : 
       * flags : Mandatory
       */
      'id' => 'Exif::Main.IFD0:ResolutionUnit',
      'desc' => [
        'en' => 'Resolution Unit',
        'fr' => 'Unité de résolution en X et Y',
      ],
    ],
  ];

}
