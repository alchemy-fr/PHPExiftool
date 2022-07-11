<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML_dc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Rights extends AbstractTagGroup
{

  protected string $id = 'HTML-dc:Rights';

  protected string $name = 'Rights';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Rights',
    'fr' => 'Droits',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::dc
       * line : 143121
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'HTML::dc.HTML-dc:Rights',
      'desc' => [
        'en' => 'Rights',
        'fr' => 'Droits',
      ],
    ],
  ];

}
