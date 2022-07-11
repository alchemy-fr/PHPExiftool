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
class AIFileFormat extends AbstractTagGroup
{

  protected string $id = 'PostScript:AIFileFormat';

  protected string $name = 'AIFileFormat';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AI File Format',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PostScript::Main
       * line : 306224
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PostScript::Main.PostScript:AIFileFormat',
      'desc' => [
        'en' => 'AI File Format',
      ],
    ],
  ];

}
