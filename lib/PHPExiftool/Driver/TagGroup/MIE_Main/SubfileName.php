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
class SubfileName extends AbstractTagGroup
{

  protected string $id = 'MIE-Main:SubfileName';

  protected string $name = 'SubfileName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Subfile Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Main
       * line : 164403
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Main.MIE-Main:SubfileName',
      'desc' => [
        'en' => 'Subfile Name',
      ],
    ],
  ];

}
