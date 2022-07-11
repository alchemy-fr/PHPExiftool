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
class SupportsNormalDynamicRange extends AbstractTagGroup
{

  protected string $id = 'XMP-crd:SupportsNormalDynamicRange';

  protected string $name = 'SupportsNormalDynamicRange';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Supports Normal Dynamic Range',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::crd
       * line : 401445
       * type : boolean
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::crd.XMP-crd:SupportsNormalDynamicRange',
      'desc' => [
        'en' => 'Supports Normal Dynamic Range',
      ],
    ],
  ];

}
