<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RTF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Author extends AbstractTagGroup
{

  protected string $id = 'RTF:Author';

  protected string $name = 'Author';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Author',
    'fr' => 'Auteur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RTF::Main
       * line : 329475
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RTF::Main.RTF:Author',
      'desc' => [
        'en' => 'Author',
        'fr' => 'Auteur',
      ],
    ],
  ];

}
