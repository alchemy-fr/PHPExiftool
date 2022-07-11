<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PlaceKeyword extends AbstractTagGroup
{

  protected string $id = 'MXF:PlaceKeyword';

  protected string $name = 'PlaceKeyword';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Place Keyword',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168732
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PlaceKeyword',
      'desc' => [
        'en' => 'Place Keyword',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 170793
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:PlaceKeyword',
      'desc' => [
        'en' => 'Place Keyword',
      ],
    ],
  ];

}
