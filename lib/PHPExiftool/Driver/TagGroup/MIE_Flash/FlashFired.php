<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashFired extends AbstractTagGroup
{

  protected string $id = 'MIE-Flash:FlashFired';

  protected string $name = 'FlashFired';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Flash Fired',
    'fr' => 'Flash utilisé',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Flash
       * line : 163724
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Flash.MIE-Flash:FlashFired',
      'desc' => [
        'en' => 'Flash Fired',
        'fr' => 'Flash utilisé',
      ],
    ],
  ];

}
