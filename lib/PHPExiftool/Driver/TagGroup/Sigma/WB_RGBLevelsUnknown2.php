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
class WB_RGBLevelsUnknown2 extends AbstractTagGroup
{

  protected string $id = 'Sigma:WB_RGBLevelsUnknown2';

  protected string $name = 'WB_RGBLevelsUnknown2';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'WB RGB Levels Unknown 2',
  ];

  protected int $count = 3;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sigma::WBSettings2
       * line : 339619
       * type : float
       * writable : true
       * count : 3
       * flags : Permanent,Unknown
       */
      'id' => 'Sigma::WBSettings2.Sigma:WB_RGBLevelsUnknown2',
      'desc' => [
        'en' => 'WB RGB Levels Unknown 2',
      ],
    ],
  ];

}
