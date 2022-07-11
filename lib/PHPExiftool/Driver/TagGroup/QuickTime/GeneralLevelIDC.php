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
class GeneralLevelIDC extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GeneralLevelIDC';

  protected string $name = 'GeneralLevelIDC';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'General Level IDC',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::HEVCConfig
       * line : 313820
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::HEVCConfig.QuickTime:GeneralLevelIDC',
      'desc' => [
        'en' => 'General Level IDC',
      ],
    ],
  ];

}
