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
class Formatter extends AbstractTagGroup
{

  protected string $id = 'HTML:Formatter';

  protected string $name = 'Formatter';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Formatter',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::Main
       * line : 142744
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'HTML::Main.HTML:Formatter',
      'desc' => [
        'en' => 'Formatter',
      ],
    ],
  ];

}
