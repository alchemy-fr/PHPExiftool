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
class A100DataOffset extends AbstractTagGroup
{

  protected string $id = 'IFD0:A100DataOffset';

  protected string $name = 'A100DataOffset';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'A100 Data Offset',
  ];

  protected int $count = 0;

  protected int $flags = 8;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 111976
       * type : ?
       * writable : false
       * count : 
       * flags : Protected
       */
      'id' => 'Exif::Main.IFD0:A100DataOffset',
      'desc' => [
        'en' => 'A100 Data Offset',
      ],
    ],
  ];

}
