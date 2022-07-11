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
class Subject extends AbstractTagGroup
{

  protected string $id = 'HTML-dc:Subject';

  protected string $name = 'Subject';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Subject',
    'fr' => 'Sujet',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::dc
       * line : 143144
       * type : ?
       * writable : false
       * count : 
       * flags : Bag,List
       */
      'id' => 'HTML::dc.HTML-dc:Subject',
      'desc' => [
        'en' => 'Subject',
        'fr' => 'Sujet',
      ],
    ],
  ];

}
