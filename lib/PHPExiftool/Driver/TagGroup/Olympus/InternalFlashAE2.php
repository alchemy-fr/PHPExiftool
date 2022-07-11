<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class InternalFlashAE2 extends AbstractTagGroup
{

  protected string $id = 'Olympus:InternalFlashAE2';

  protected string $name = 'InternalFlashAE2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Internal Flash AE2',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Olympus::Main
       * line : 259211
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Olympus::Main.Olympus:InternalFlashAE2',
      'desc' => [
        'en' => 'Internal Flash AE2',
      ],
    ],
  ];

}
