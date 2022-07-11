<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TiffMeteringImage extends AbstractTagGroup
{

  protected string $id = 'Minolta:TiffMeteringImage';

  protected string $name = 'TiffMeteringImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tiff Metering Image',
  ];

  protected int $count = 9600;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::WBInfoA100
       * line : 186001
       * type : undef
       * writable : false
       * count : 9600
       * flags : Permanent
       */
      'id' => 'Minolta::WBInfoA100.Minolta:TiffMeteringImage',
      'desc' => [
        'en' => 'Tiff Metering Image',
      ],
    ],
  ];

}
