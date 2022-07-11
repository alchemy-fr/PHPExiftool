<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RMETA;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Location extends AbstractTagGroup
{

  protected string $id = 'RMETA:Location';

  protected string $name = 'Location';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Location',
    'fr' => 'Lieu',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::RMETA
       * line : 333997
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Ricoh::RMETA.RMETA:Location',
      'desc' => [
        'en' => 'Location',
        'fr' => 'Lieu',
      ],
    ],
  ];

}
