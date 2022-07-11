<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifTool;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Error extends AbstractTagGroup
{

  protected string $id = 'ExifTool:Error';

  protected string $name = 'Error';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Error',
    'fr' => 'Erreur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121376
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.ExifTool:Error',
      'desc' => [
        'en' => 'Error',
        'fr' => 'Erreur',
      ],
    ],
  ];

}
