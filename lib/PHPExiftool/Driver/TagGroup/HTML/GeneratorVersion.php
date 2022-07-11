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
class GeneratorVersion extends AbstractTagGroup
{

  protected string $id = 'HTML:GeneratorVersion';

  protected string $name = 'GeneratorVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Generator Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : HTML::Main
       * line : 142752
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'HTML::Main.HTML:GeneratorVersion',
      'desc' => [
        'en' => 'Generator Version',
      ],
    ],
  ];

}
