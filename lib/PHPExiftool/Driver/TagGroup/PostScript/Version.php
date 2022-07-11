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
class Version extends AbstractTagGroup
{

  protected string $id = 'PostScript:Version';

  protected string $name = 'Version';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PostScript::Main
       * line : 306447
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PostScript::Main.PostScript:Version',
      'desc' => [
        'en' => 'Version',
      ],
    ],
  ];

}
