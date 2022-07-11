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
class PMVersion extends AbstractTagGroup
{

  protected string $id = 'XMP-photomech:PMVersion';

  protected string $name = 'PMVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'PM Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoMechanic::XMP
       * line : 305283
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PhotoMechanic::XMP.XMP-photomech:PMVersion',
      'desc' => [
        'en' => 'PM Version',
      ],
    ],
  ];

}
