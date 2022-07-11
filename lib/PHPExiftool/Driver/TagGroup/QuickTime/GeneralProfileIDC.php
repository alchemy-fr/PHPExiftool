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
class GeneralProfileIDC extends AbstractTagGroup
{

  protected string $id = 'QuickTime:GeneralProfileIDC';

  protected string $name = 'GeneralProfileIDC';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'General Profile IDC',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::HEVCConfig
       * line : 313735
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::HEVCConfig.QuickTime:GeneralProfileIDC',
      'desc' => [
        'en' => 'General Profile IDC',
      ],
    ],
  ];

}
