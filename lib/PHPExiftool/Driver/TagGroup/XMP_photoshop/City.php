<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class City extends AbstractTagGroup
{

  protected string $id = 'XMP-photoshop:City';

  protected string $name = 'City';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'City',
    'fr' => 'Ville',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::photoshop
       * line : 410485
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::photoshop.XMP-photoshop:City',
      'desc' => [
        'en' => 'City',
        'fr' => 'Ville',
      ],
    ],
  ];

}
