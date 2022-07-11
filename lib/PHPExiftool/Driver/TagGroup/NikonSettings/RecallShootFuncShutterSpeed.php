<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RecallShootFuncShutterSpeed extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:RecallShootFuncShutterSpeed';

  protected string $name = 'RecallShootFuncShutterSpeed';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Recall Shoot Func Shutter Speed',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 248335
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:RecallShootFuncShutterSpeed',
      'desc' => [
        'en' => 'Recall Shoot Func Shutter Speed',
      ],
    ],
  ];

}
