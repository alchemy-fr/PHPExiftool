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
class VideoCardGamma extends AbstractTagGroup
{

  protected string $id = 'ICC_Profile:VideoCardGamma';

  protected string $name = 'VideoCardGamma';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Video Card Gamma',
    'fr' => 'Gamma de la carte vidéo',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Main
       * line : 147227
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ICC_Profile::Main.ICC_Profile:VideoCardGamma',
      'desc' => [
        'en' => 'Video Card Gamma',
        'fr' => 'Gamma de la carte vidéo',
      ],
    ],
  ];

}
