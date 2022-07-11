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
class ModDate extends AbstractTagGroup
{

  protected string $id = 'PNG:ModDate';

  protected string $name = 'ModDate';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Mod Date',
    'fr' => 'Date de modification',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::TextualData
       * line : 273374
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PNG::TextualData.PNG:ModDate',
      'desc' => [
        'en' => 'Mod Date',
        'fr' => 'Date de modification',
      ],
    ],
  ];

}
