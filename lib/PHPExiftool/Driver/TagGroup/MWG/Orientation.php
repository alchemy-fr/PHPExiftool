<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MWG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Orientation extends AbstractTagGroup
{

  protected string $id = 'MWG:Orientation';

  protected string $name = 'Orientation';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Orientation',
    'fr' => 'Orientation de l\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90924
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Composite.MWG:Orientation',
      'desc' => [
        'en' => 'Orientation',
        'fr' => 'Orientation de l\'image',
      ],
    ],
  ];

}
