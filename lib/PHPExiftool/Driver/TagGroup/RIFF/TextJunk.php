<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TextJunk extends AbstractTagGroup
{

  protected string $id = 'RIFF:TextJunk';

  protected string $name = 'TextJunk';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Text Junk',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Main
       * line : 328994
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Main.RIFF:TextJunk',
      'desc' => [
        'en' => 'Text Junk',
      ],
    ],
  ];

}
