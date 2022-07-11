<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RedEyeInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-crs:RedEyeInfo';

  protected string $name = 'RedEyeInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Red Eye Info',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crs
       * line : 404300
       * type : string
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::crs.XMP-crs:RedEyeInfo',
      'desc' => [
        'en' => 'Red Eye Info',
      ],
    ],
  ];

}
