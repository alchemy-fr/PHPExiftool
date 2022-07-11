<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExternalFlashGuideNumber extends AbstractTagGroup
{

  protected string $id = 'Olympus:ExternalFlashGuideNumber';

  protected string $name = 'ExternalFlashGuideNumber';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'External Flash Guide Number',
    'fr' => 'Nombre guide flash externe',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::FocusInfo
       * line : 255354
       * type : rational64s
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Olympus::FocusInfo.Olympus:ExternalFlashGuideNumber',
      'desc' => [
        'en' => 'External Flash Guide Number',
        'fr' => 'Nombre guide flash externe',
      ],
    ],
  ];

}
