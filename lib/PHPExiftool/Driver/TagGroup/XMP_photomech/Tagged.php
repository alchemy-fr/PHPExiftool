<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photomech;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Tagged extends AbstractTagGroup
{

  protected string $id = 'XMP-photomech:Tagged';

  protected string $name = 'Tagged';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Tagged',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoMechanic::XMP
       * line : 305292
       * type : boolean
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PhotoMechanic::XMP.XMP-photomech:Tagged',
      'desc' => [
        'en' => 'Tagged',
      ],
    ],
  ];

}
