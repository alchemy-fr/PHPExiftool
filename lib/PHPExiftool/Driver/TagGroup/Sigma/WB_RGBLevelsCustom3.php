<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sigma;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGBLevelsCustom3 extends AbstractTagGroup
{

  protected string $id = 'Sigma:WB_RGBLevelsCustom3';

  protected string $name = 'WB_RGBLevelsCustom3';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGB Levels Custom 3',
  ];

  protected int $count = 3;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::WBSettings
       * line : 339606
       * type : float
       * writable : true
       * count : 3
       * flags : Permanent
       */
      'id' => 'Sigma::WBSettings.Sigma:WB_RGBLevelsCustom3',
      'desc' => [
        'en' => 'WB RGB Levels Custom 3',
      ],
    ],
  ];

}
