<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NumIndexEntries extends AbstractTagGroup
{

  protected string $id = 'IPTC:NumIndexEntries';

  protected string $name = 'NumIndexEntries';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Num Index Entries',
    'fr' => 'Nombre d\'entrées d\'index',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 151956
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::NewsPhoto.IPTC:NumIndexEntries',
      'desc' => [
        'en' => 'Num Index Entries',
        'fr' => 'Nombre d\'entrées d\'index',
      ],
    ],
  ];

}
