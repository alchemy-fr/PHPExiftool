<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateTimeGenerated extends AbstractTagGroup
{

  protected string $id = 'FLIR:DateTimeGenerated';

  protected string $name = 'DateTimeGenerated';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Date/Time Generated',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::ParamInfo
       * line : 123895
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::ParamInfo.FLIR:DateTimeGenerated',
      'desc' => [
        'en' => 'Date/Time Generated',
      ],
    ],
  ];

}
