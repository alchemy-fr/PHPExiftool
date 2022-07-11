<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Collection extends AbstractTagGroup
{

  protected string $id = 'PNG:Collection';

  protected string $name = 'Collection';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Collection',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::TextualData
       * line : 273179
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PNG::TextualData.PNG:Collection',
      'desc' => [
        'en' => 'Collection',
      ],
    ],
  ];

}
