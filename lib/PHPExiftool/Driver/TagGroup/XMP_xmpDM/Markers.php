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
class Markers extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:Markers';

  protected string $name = 'Markers';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Markers',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413501
       * type : struct
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:Markers',
      'desc' => [
        'en' => 'Markers',
      ],
    ],
  ];

}
