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
class AIColorModel extends AbstractTagGroup
{

  protected string $id = 'PostScript:AIColorModel';

  protected string $name = 'AIColorModel';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'AI Color Model',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PostScript::Main
       * line : 306270
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PostScript::Main.PostScript:AIColorModel',
      'desc' => [
        'en' => 'AI Color Model',
      ],
    ],
  ];

}
