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
class ColorClass extends AbstractTagGroup
{

  protected string $id = 'XMP-photomech:ColorClass';

  protected string $name = 'ColorClass';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Class',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoMechanic::XMP
       * line : 305218
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PhotoMechanic::XMP.XMP-photomech:ColorClass',
      'desc' => [
        'en' => 'Color Class',
      ],
    ],
  ];

}
