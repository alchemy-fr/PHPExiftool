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
class TimeCodes extends AbstractTagGroup
{

  protected string $id = 'IFD0:TimeCodes';

  protected string $name = 'TimeCodes';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Time Codes',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120847
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.IFD0:TimeCodes',
      'desc' => [
        'en' => 'Time Codes',
      ],
    ],
  ];

}
