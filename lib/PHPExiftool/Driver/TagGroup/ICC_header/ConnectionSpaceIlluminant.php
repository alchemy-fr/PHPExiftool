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
class ConnectionSpaceIlluminant extends AbstractTagGroup
{

  protected string $id = 'ICC-header:ConnectionSpaceIlluminant';

  protected string $name = 'ConnectionSpaceIlluminant';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Connection Space Illuminant',
    'fr' => 'Illuminant d\'espace de connexion',
  ];

  protected int $count = 3;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Header
       * line : 145450
       * type : fixed32s
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'ICC_Profile::Header.ICC-header:ConnectionSpaceIlluminant',
      'desc' => [
        'en' => 'Connection Space Illuminant',
        'fr' => 'Illuminant d\'espace de connexion',
      ],
    ],
  ];

}
