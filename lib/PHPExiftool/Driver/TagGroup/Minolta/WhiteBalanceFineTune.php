<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalanceFineTune extends AbstractTagGroup
{

  protected string $id = 'Minolta:WhiteBalanceFineTune';

  protected string $name = 'WhiteBalanceFineTune';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'White Balance Fine Tune',
    'fr' => 'Balance des blancs - Réglage fin',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Minolta::CameraSettingsA100
       * line : 181791
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::CameraSettingsA100.Minolta:WhiteBalanceFineTune',
      'desc' => [
        'en' => 'White Balance Fine Tune',
        'fr' => 'Balance des blancs - Réglage fin',
      ],
    ],
    1 => [
      /**
       * table_name : Minolta::Main
       * line : 185119
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Minolta::Main.Minolta:WhiteBalanceFineTune',
      'desc' => [
        'en' => 'White Balance Fine Tune',
        'fr' => 'Balance des blancs - Réglage fin',
      ],
    ],
  ];

}
