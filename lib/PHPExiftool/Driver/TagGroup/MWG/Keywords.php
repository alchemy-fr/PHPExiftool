<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MWG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Keywords extends AbstractTagGroup
{

  protected string $id = 'MWG:Keywords';

  protected string $name = 'Keywords';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Keywords',
    'fr' => 'Mots-clés',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90871
       * type : ?
       * writable : true
       * count : 
       * flags : List
       */
      'id' => 'Composite.MWG:Keywords',
      'desc' => [
        'en' => 'Keywords',
        'fr' => 'Mots-clés',
      ],
    ],
  ];

}
