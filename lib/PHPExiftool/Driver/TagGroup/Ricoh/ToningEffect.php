<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToningEffect extends AbstractTagGroup
{

  protected string $id = 'Ricoh:ToningEffect';

  protected string $name = 'ToningEffect';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Toning Effect',
    'fr' => 'Virage',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::Main
       * line : 333633
       * type : int16u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Ricoh::Main.Ricoh:ToningEffect',
      'desc' => [
        'en' => 'Toning Effect',
        'fr' => 'Virage',
      ],
    ],
  ];

}
