<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Lyrics3;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Indications extends AbstractTagGroup
{

  protected string $id = 'Lyrics3:Indications';

  protected string $name = 'Indications';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Indications',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ID3::Lyrics3
       * line : 147459
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ID3::Lyrics3.Lyrics3:Indications',
      'desc' => [
        'en' => 'Indications',
      ],
    ],
  ];

}
