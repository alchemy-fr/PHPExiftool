<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LameLowPassFilter extends AbstractTagGroup
{

  protected string $id = 'MPEG:LameLowPassFilter';

  protected string $name = 'LameLowPassFilter';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Lame Low Pass Filter',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPEG::Lame
       * line : 166309
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPEG::Lame.MPEG:LameLowPassFilter',
      'desc' => [
        'en' => 'Lame Low Pass Filter',
      ],
    ],
  ];

}
