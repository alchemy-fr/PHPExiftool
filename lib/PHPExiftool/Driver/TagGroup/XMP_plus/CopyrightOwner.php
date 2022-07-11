<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CopyrightOwner extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:CopyrightOwner';

  protected string $name = 'CopyrightOwner';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Copyright Owner',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 265584
       * type : struct
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'PLUS::XMP.XMP-plus:CopyrightOwner',
      'desc' => [
        'en' => 'Copyright Owner',
      ],
    ],
  ];

}
