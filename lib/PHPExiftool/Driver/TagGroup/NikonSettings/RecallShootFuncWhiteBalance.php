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
class RecallShootFuncWhiteBalance extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:RecallShootFuncWhiteBalance';

  protected string $name = 'RecallShootFuncWhiteBalance';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Recall Shoot Func White Balance',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 248390
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:RecallShootFuncWhiteBalance',
      'desc' => [
        'en' => 'Recall Shoot Func White Balance',
      ],
    ],
  ];

}
