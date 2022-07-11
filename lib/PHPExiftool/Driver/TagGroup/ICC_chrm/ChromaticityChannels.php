<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_chrm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChromaticityChannels extends AbstractTagGroup
{

  protected string $id = 'ICC-chrm:ChromaticityChannels';

  protected string $name = 'ChromaticityChannels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Chromaticity Channels',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Chromaticity
       * line : 143430
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ICC_Profile::Chromaticity.ICC-chrm:ChromaticityChannels',
      'desc' => [
        'en' => 'Chromaticity Channels',
      ],
    ],
  ];

}
