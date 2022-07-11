<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SensitivityAdjust extends AbstractTagGroup
{

  protected string $id = 'Pentax:SensitivityAdjust';

  protected string $name = 'SensitivityAdjust';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sensitivity Adjust',
    'fr' => 'Réglage de sensibilité',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 299866
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:SensitivityAdjust',
      'desc' => [
        'en' => 'Sensitivity Adjust',
        'fr' => 'Réglage de sensibilité',
      ],
    ],
  ];

}
