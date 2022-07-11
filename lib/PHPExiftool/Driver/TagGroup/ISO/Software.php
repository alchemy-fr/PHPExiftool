<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ISO;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Software extends AbstractTagGroup
{

  protected string $id = 'ISO:Software';

  protected string $name = 'Software';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Software',
    'fr' => 'Logiciel',
  ];

  protected int $count = 128;

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::PrimaryVolume
       * line : 152385
       * type : string
       * writable : false
       * count : 128
       * flags : 
       */
      'id' => 'ISO::PrimaryVolume.ISO:Software',
      'desc' => [
        'en' => 'Software',
        'fr' => 'Logiciel',
      ],
    ],
  ];

}
