<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaskSubArea extends AbstractTagGroup
{

  protected string $id = 'SubIFD:MaskSubArea';

  protected string $name = 'MaskSubArea';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Mask Sub Area',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 121102
       * type : ?
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'Exif::Main.SubIFD:MaskSubArea',
      'desc' => [
        'en' => 'Mask Sub Area',
      ],
    ],
  ];

}
