<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Main;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MIEVersion extends AbstractTagGroup
{

  protected string $id = 'MIE-Main:MIEVersion';

  protected string $name = 'MIEVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'MIE Version',
    'fr' => 'Version MIE',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Main
       * line : 164390
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Main.MIE-Main:MIEVersion',
      'desc' => [
        'en' => 'MIE Version',
        'fr' => 'Version MIE',
      ],
    ],
  ];

}
