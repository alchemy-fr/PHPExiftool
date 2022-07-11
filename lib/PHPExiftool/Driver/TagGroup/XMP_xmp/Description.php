<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Description extends AbstractTagGroup
{

  protected string $id = 'XMP-xmp:Description';

  protected string $name = 'Description';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Description',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmp
       * line : 412949
       * type : lang-alt
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::xmp.XMP-xmp:Description',
      'desc' => [
        'en' => 'Description',
      ],
    ],
  ];

}
