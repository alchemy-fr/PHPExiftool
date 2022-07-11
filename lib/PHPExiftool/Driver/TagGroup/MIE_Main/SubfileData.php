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
class SubfileData extends AbstractTagGroup
{

  protected string $id = 'MIE-Main:SubfileData';

  protected string $name = 'SubfileData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Subfile Data',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Main
       * line : 164409
       * type : undef
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'MIE::Main.MIE-Main:SubfileData',
      'desc' => [
        'en' => 'Subfile Data',
      ],
    ],
  ];

}
