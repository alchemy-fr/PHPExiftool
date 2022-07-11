<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DustRemovalData extends AbstractTagGroup
{

  protected string $id = 'Canon:DustRemovalData';

  protected string $name = 'DustRemovalData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Dust Removal Data',
  ];

  protected int $count = 0;

  protected int $flags = 22;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::Main
       * line : 65893
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Permanent,Unsafe
       */
      'id' => 'Canon::Main.Canon:DustRemovalData',
      'desc' => [
        'en' => 'Dust Removal Data',
      ],
    ],
  ];

}
