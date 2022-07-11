<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_header;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrimaryPlatform extends AbstractTagGroup
{

  protected string $id = 'ICC-header:PrimaryPlatform';

  protected string $name = 'PrimaryPlatform';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Primary Platform',
    'fr' => 'Plateforme primaire',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Header
       * line : 144506
       * type : string
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'ICC_Profile::Header.ICC-header:PrimaryPlatform',
      'desc' => [
        'en' => 'Primary Platform',
        'fr' => 'Plateforme primaire',
      ],
    ],
  ];

}
