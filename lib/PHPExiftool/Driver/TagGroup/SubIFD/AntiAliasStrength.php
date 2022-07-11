<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AntiAliasStrength extends AbstractTagGroup
{

  protected string $id = 'SubIFD:AntiAliasStrength';

  protected string $name = 'AntiAliasStrength';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Anti Alias Strength',
    'fr' => 'Puissance relative du filtre anticrénelage de l\'appareil',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 119546
       * type : rational64u
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.SubIFD:AntiAliasStrength',
      'desc' => [
        'en' => 'Anti Alias Strength',
        'fr' => 'Puissance relative du filtre anticrénelage de l\'appareil',
      ],
    ],
  ];

}
