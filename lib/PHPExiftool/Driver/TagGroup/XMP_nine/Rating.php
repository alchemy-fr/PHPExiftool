<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_nine;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Rating extends AbstractTagGroup
{

  protected string $id = 'XMP-nine:Rating';

  protected string $name = 'Rating';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Rating',
    'fr' => 'Évaluation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::nine
       * line : 210410
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Nikon::nine.XMP-nine:Rating',
      'desc' => [
        'en' => 'Rating',
        'fr' => 'Évaluation',
      ],
    ],
  ];

}
