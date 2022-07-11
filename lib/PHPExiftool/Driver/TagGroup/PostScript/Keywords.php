<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PostScript;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Keywords extends AbstractTagGroup
{

  protected string $id = 'PostScript:Keywords';

  protected string $name = 'Keywords';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Keywords',
    'fr' => 'Mots-clés',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PostScript::Main
       * line : 306364
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PostScript::Main.PostScript:Keywords',
      'desc' => [
        'en' => 'Keywords',
        'fr' => 'Mots-clés',
      ],
    ],
  ];

}
