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
class LensFunc1Button extends AbstractTagGroup
{

  protected string $id = 'NikonSettings:LensFunc1Button';

  protected string $name = 'LensFunc1Button';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Lens Func 1 Button',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonSettings::Main
       * line : 246775
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:LensFunc1Button',
      'desc' => [
        'en' => 'Lens Func 1 Button',
      ],
    ],
    1 => [
      /**
       * table_name : NikonSettings::Main
       * line : 246870
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonSettings::Main.NikonSettings:LensFunc1Button',
      'desc' => [
        'en' => 'Lens Func 1 Button',
      ],
    ],
  ];

}
