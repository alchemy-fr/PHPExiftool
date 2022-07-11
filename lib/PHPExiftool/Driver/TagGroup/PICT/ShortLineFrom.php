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
class ShortLineFrom extends AbstractTagGroup
{

  protected string $id = 'PICT:ShortLineFrom';

  protected string $name = 'ShortLineFrom';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Short Line From',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : PICT::Main
       * line : 265069
       * type : int8u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'PICT::Main.PICT:ShortLineFrom',
      'desc' => [
        'en' => 'Short Line From',
      ],
    ],
  ];

}
