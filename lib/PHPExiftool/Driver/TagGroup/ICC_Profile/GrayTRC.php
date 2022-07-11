<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_Profile;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GrayTRC extends AbstractTagGroup
{

  protected string $id = 'ICC_Profile:GrayTRC';

  protected string $name = 'GrayTRC';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Gray Tone Reproduction Curve',
    'fr' => 'Courbe de reproduction des tons gris',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Main
       * line : 146754
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ICC_Profile::Main.ICC_Profile:GrayTRC',
      'desc' => [
        'en' => 'Gray Tone Reproduction Curve',
        'fr' => 'Courbe de reproduction des tons gris',
      ],
    ],
  ];

}
