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
class Title extends AbstractTagGroup
{

  protected string $id = 'HTML-dc:Title';

  protected string $name = 'Title';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Title',
    'fr' => 'Titre',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::dc
       * line : 143158
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'HTML::dc.HTML-dc:Title',
      'desc' => [
        'en' => 'Title',
        'fr' => 'Titre',
      ],
    ],
  ];

}
