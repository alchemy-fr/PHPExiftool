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
class Nickname extends AbstractTagGroup
{

  protected string $id = 'XMP-xmp:Nickname';

  protected string $name = 'Nickname';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Nickname',
    'fr' => 'Surnom',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmp
       * line : 413018
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::xmp.XMP-xmp:Nickname',
      'desc' => [
        'en' => 'Nickname',
        'fr' => 'Surnom',
      ],
    ],
  ];

}
