<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaxAvailWidth extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:MaxAvailWidth';

  protected string $name = 'MaxAvailWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Avail Width',
    'fr' => 'Largeur max Disponible',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409871
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:MaxAvailWidth',
      'desc' => [
        'en' => 'Max Avail Width',
        'fr' => 'Largeur max Disponible',
      ],
    ],
  ];

}
