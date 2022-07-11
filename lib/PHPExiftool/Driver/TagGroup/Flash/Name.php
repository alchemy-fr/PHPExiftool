<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Name extends AbstractTagGroup
{

  protected string $id = 'Flash:Name';

  protected string $name = 'Name';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Name',
    'fr' => 'Nom',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Flash::CuePoint
       * line : 124208
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Flash::CuePoint.Flash:Name',
      'desc' => [
        'en' => 'Name',
        'fr' => 'Nom',
      ],
    ],
  ];

}
