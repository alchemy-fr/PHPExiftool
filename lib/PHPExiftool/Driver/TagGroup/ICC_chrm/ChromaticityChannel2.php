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
class ChromaticityChannel2 extends AbstractTagGroup
{

  protected string $id = 'ICC-chrm:ChromaticityChannel2';

  protected string $name = 'ChromaticityChannel2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Chromaticity Channel 2',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Chromaticity
       * line : 143455
       * type : fixed32u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'ICC_Profile::Chromaticity.ICC-chrm:ChromaticityChannel2',
      'desc' => [
        'en' => 'Chromaticity Channel 2',
      ],
    ],
  ];

}
