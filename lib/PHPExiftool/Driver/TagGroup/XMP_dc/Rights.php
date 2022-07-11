<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Rights extends AbstractTagGroup
{

  protected string $id = 'XMP-dc:Rights';

  protected string $name = 'Rights';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Rights',
    'fr' => 'Droits',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::dc
       * line : 405191
       * type : lang-alt
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::dc.XMP-dc:Rights',
      'desc' => [
        'en' => 'Rights',
        'fr' => 'Droits',
      ],
    ],
  ];

}
