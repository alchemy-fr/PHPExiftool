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
class MakerNoteSafety extends AbstractTagGroup
{

  protected string $id = 'IFD0:MakerNoteSafety';

  protected string $name = 'MakerNoteSafety';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Maker Note Safety',
    'fr' => 'Sécurité de note de fabricant',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119574
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:MakerNoteSafety',
      'desc' => [
        'en' => 'Maker Note Safety',
        'fr' => 'Sécurité de note de fabricant',
      ],
    ],
  ];

}
