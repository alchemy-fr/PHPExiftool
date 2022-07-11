<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ManualFocusDistance extends AbstractTagGroup
{

  protected string $id = 'Nikon:ManualFocusDistance';

  protected string $name = 'ManualFocusDistance';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Manual Focus Distance',
    'fr' => 'Distance de Mise-au-point Manuelle',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 197570
       * type : rational64u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:ManualFocusDistance',
      'desc' => [
        'en' => 'Manual Focus Distance',
        'fr' => 'Distance de Mise-au-point Manuelle',
      ],
    ],
  ];

}
