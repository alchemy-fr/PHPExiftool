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
class Copyright extends AbstractTagGroup
{

  protected string $id = 'PostScript:Copyright';

  protected string $name = 'Copyright';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Copyright',
    'fr' => 'Propriétaire du copyright',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PostScript::Main
       * line : 306304
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PostScript::Main.PostScript:Copyright',
      'desc' => [
        'en' => 'Copyright',
        'fr' => 'Propriétaire du copyright',
      ],
    ],
  ];

}
