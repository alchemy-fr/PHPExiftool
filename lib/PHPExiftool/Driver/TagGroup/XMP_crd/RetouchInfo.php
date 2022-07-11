<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RetouchInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:RetouchInfo';

  protected string $name = 'RetouchInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Retouch Info',
  ];

  protected int $count = 0;

  protected int $flags = 577;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 401312
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,List,Seq
       */
      'id' => 'XMP::crd.XMP-crd:RetouchInfo',
      'desc' => [
        'en' => 'Retouch Info',
      ],
    ],
  ];

}
