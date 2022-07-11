<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class XMP extends AbstractTagGroup
{

  protected string $id = 'GIF:XMP';

  protected string $name = 'XMP';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'XMP',
    'fr' => 'Métadonnées XMP',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : GIF::Extensions
       * line : 131601
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'GIF::Extensions.GIF:XMP',
      'desc' => [
        'en' => 'XMP',
        'fr' => 'Métadonnées XMP',
      ],
    ],
  ];

}
