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
class AuthorsPosition extends AbstractTagGroup
{

  protected string $id = 'XMP-photoshop:AuthorsPosition';

  protected string $name = 'AuthorsPosition';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Authors Position',
    'fr' => 'Titre du créateur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::photoshop
       * line : 410433
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::photoshop.XMP-photoshop:AuthorsPosition',
      'desc' => [
        'en' => 'Authors Position',
        'fr' => 'Titre du créateur',
      ],
    ],
  ];

}
