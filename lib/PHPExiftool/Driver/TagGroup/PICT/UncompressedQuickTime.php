<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PICT;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UncompressedQuickTime extends AbstractTagGroup
{

  protected string $id = 'PICT:UncompressedQuickTime';

  protected string $name = 'UncompressedQuickTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Uncompressed Quick Time',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265439
       * type : Int32uData
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PICT::Main.PICT:UncompressedQuickTime',
      'desc' => [
        'en' => 'Uncompressed Quick Time',
      ],
    ],
  ];

}
