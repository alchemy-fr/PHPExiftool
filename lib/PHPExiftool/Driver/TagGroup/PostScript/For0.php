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
class For0 extends AbstractTagGroup
{

  protected string $id = 'PostScript:For';

  protected string $name = 'For';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'For',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PostScript::Main
       * line : 306354
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PostScript::Main.PostScript:For',
      'desc' => [
        'en' => 'For',
      ],
    ],
  ];

}
