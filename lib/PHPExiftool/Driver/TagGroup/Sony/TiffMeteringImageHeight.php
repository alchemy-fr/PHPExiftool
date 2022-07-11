<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TiffMeteringImageHeight extends AbstractTagGroup
{

  protected string $id = 'Sony:TiffMeteringImageHeight';

  protected string $name = 'TiffMeteringImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tiff Metering Image Height',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::Tag940e
       * line : 391364
       * type : int8u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::Tag940e.Sony:TiffMeteringImageHeight',
      'desc' => [
        'en' => 'Tiff Metering Image Height',
      ],
    ],
  ];

}
