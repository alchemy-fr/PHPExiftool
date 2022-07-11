<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_lr;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrivateRTKInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-lr:PrivateRTKInfo';

  protected string $name = 'PrivateRTKInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Private RTK Info',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Lightroom
       * line : 397726
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::Lightroom.XMP-lr:PrivateRTKInfo',
      'desc' => [
        'en' => 'Private RTK Info',
      ],
    ],
  ];

}
