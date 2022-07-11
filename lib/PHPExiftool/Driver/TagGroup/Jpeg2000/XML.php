<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Jpeg2000;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XML extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:XML';

  protected string $name = 'XML';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'XML',
  ];

  protected int $count = 0;

  protected int $flags = 82;

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::Main
       * line : 154649
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,List,Unsafe
       */
      'id' => 'Jpeg2000::Main.Jpeg2000:XML',
      'desc' => [
        'en' => 'XML',
      ],
    ],
  ];

}
