<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Picture extends AbstractTagGroup
{

  protected string $id = 'ASF:Picture';

  protected string $name = 'Picture';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Picture',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::Picture
       * line : 2036
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'ASF::Picture.ASF:Picture',
      'desc' => [
        'en' => 'Picture',
      ],
    ],
  ];

}
