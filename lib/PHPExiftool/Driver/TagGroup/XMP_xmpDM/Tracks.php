<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Tracks extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:Tracks';

  protected string $name = 'Tracks';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Tracks',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413880
       * type : struct
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:Tracks',
      'desc' => [
        'en' => 'Tracks',
      ],
    ],
  ];

}
