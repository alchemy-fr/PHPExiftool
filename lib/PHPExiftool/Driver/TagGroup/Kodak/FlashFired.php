<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashFired extends AbstractTagGroup
{

  protected string $id = 'Kodak:FlashFired';

  protected string $name = 'FlashFired';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Fired',
    'fr' => 'Flash utilisé',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Main
       * line : 158494
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Main.Kodak:FlashFired',
      'desc' => [
        'en' => 'Flash Fired',
        'fr' => 'Flash utilisé',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::TextualInfo
       * line : 159961
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::TextualInfo.Kodak:FlashFired',
      'desc' => [
        'en' => 'Flash Fired',
        'fr' => 'Flash utilisé',
      ],
    ],
  ];

}
