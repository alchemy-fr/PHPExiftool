<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FSType extends AbstractTagGroup
{

  protected string $id = 'Font:FSType';

  protected string $name = 'FSType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'FS Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Font::PSInfo
       * line : 128473
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Font::PSInfo.Font:FSType',
      'desc' => [
        'en' => 'FS Type',
      ],
    ],
  ];

}
