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
class DVText extends AbstractTagGroup
{

  protected string $id = 'PICT:DVText';

  protected string $name = 'DVText';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'DV Text',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265083
       * type : Int8uText
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PICT::Main.PICT:DVText',
      'desc' => [
        'en' => 'DV Text',
      ],
    ],
  ];

}
