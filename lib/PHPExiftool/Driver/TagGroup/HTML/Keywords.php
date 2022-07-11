<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Keywords extends AbstractTagGroup
{

  protected string $id = 'HTML:Keywords';

  protected string $name = 'Keywords';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Keywords',
    'fr' => 'Mots-clés',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::Main
       * line : 142760
       * type : ?
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'HTML::Main.HTML:Keywords',
      'desc' => [
        'en' => 'Keywords',
        'fr' => 'Mots-clés',
      ],
    ],
  ];

}
