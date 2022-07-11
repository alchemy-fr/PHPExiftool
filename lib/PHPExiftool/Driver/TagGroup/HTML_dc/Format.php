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
class Format extends AbstractTagGroup
{

  protected string $id = 'HTML-dc:Format';

  protected string $name = 'Format';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Format',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::dc
       * line : 143089
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'HTML::dc.HTML-dc:Format',
      'desc' => [
        'en' => 'Format',
      ],
    ],
  ];

}
