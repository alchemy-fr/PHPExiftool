<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\All;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OtherImage extends AbstractTagGroup
{

  protected string $id = 'All:OtherImage';

  protected string $name = 'OtherImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Other Image',
    'fr' => 'Autre image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90435
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Composite.All:OtherImage',
      'desc' => [
        'en' => 'Other Image',
        'fr' => 'Autre image',
      ],
    ],
  ];

}
