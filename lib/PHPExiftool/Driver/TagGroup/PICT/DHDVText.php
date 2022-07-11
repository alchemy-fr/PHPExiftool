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
class DHDVText extends AbstractTagGroup
{

  protected string $id = 'PICT:DHDVText';

  protected string $name = 'DHDVText';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'DHDV Text',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265086
       * type : Int8u2Text
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PICT::Main.PICT:DHDVText',
      'desc' => [
        'en' => 'DHDV Text',
      ],
    ],
  ];

}
