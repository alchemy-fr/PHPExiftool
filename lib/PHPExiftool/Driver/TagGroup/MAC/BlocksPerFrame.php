<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BlocksPerFrame extends AbstractTagGroup
{

  protected string $id = 'MAC:BlocksPerFrame';

  protected string $name = 'BlocksPerFrame';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Blocks Per Frame',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : APE::NewHeader
       * line : 352
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APE::NewHeader.MAC:BlocksPerFrame',
      'desc' => [
        'en' => 'Blocks Per Frame',
      ],
    ],
  ];

}
