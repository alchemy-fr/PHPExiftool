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
class BibligraphicFileName extends AbstractTagGroup
{

  protected string $id = 'ISO:BibligraphicFileName';

  protected string $name = 'BibligraphicFileName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Bibligraphic File Name',
  ];

  protected int $count = 37;

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::PrimaryVolume
       * line : 152410
       * type : string
       * writable : false
       * count : 37
       * flags : 
       */
      'id' => 'ISO::PrimaryVolume.ISO:BibligraphicFileName',
      'desc' => [
        'en' => 'Bibligraphic File Name',
      ],
    ],
  ];

}
