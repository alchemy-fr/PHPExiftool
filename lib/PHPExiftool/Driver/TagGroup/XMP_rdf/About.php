<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_rdf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class About extends AbstractTagGroup
{

  protected string $id = 'XMP-rdf:About';

  protected string $name = 'About';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'About',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::rdf
       * line : 411686
       * type : string
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'XMP::rdf.XMP-rdf:About',
      'desc' => [
        'en' => 'About',
      ],
    ],
  ];

}
