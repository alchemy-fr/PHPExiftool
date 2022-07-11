<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CopyrightOwnerName extends AbstractTagGroup
{

  protected string $id = 'MXF:CopyrightOwnerName';

  protected string $name = 'CopyrightOwnerName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Copyright Owner Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167790
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CopyrightOwnerName',
      'desc' => [
        'en' => 'Copyright Owner Name',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170259
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:CopyrightOwnerName',
      'desc' => [
        'en' => 'Copyright Owner Name',
      ],
    ],
  ];

}
