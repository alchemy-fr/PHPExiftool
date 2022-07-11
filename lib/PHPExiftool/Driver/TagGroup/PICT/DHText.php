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
class DHText extends AbstractTagGroup
{

  protected string $id = 'PICT:DHText';

  protected string $name = 'DHText';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'DH Text',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265080
       * type : Int8uText
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PICT::Main.PICT:DHText',
      'desc' => [
        'en' => 'DH Text',
      ],
    ],
  ];

}
