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
class RemoteFuncButton extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:RemoteFuncButton';

  protected string $name = 'RemoteFuncButton';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Remote Func Button',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 245254
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:RemoteFuncButton',
      'desc' => [
        'en' => 'Remote Func Button',
      ],
    ],
    1 => [
      /**
       * table_name : NikonSettings::Main
       * line : 245295
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:RemoteFuncButton',
      'desc' => [
        'en' => 'Remote Func Button',
      ],
    ],
  ];

}
