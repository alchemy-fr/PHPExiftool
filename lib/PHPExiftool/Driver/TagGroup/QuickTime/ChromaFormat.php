<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChromaFormat extends AbstractTagGroup
{

  protected string $id = 'QuickTime:ChromaFormat';

  protected string $name = 'ChromaFormat';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Chroma Format',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::AV1Config
       * line : 310653
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::AV1Config.QuickTime:ChromaFormat',
      'desc' => [
        'en' => 'Chroma Format',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::HEVCConfig
       * line : 313829
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::HEVCConfig.QuickTime:ChromaFormat',
      'desc' => [
        'en' => 'Chroma Format',
      ],
    ],
  ];

}
