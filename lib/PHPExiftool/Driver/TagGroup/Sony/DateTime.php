<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DateTime extends AbstractTagGroup
{

  protected string $id = 'Sony:DateTime';

  protected string $name = 'DateTime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Date Time',
    'fr' => 'Date de modification du fichier',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::rtmd
       * line : 394287
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Sony::rtmd.Sony:DateTime',
      'desc' => [
        'en' => 'Date Time',
        'fr' => 'Date de modification du fichier',
      ],
    ],
  ];

}
