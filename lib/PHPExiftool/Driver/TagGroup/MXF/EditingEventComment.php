<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EditingEventComment extends AbstractTagGroup
{

  protected string $id = 'MXF:EditingEventComment';

  protected string $name = 'EditingEventComment';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Editing Event Comment',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169724
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:EditingEventComment',
      'desc' => [
        'en' => 'Editing Event Comment',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 169727
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:EditingEventComment',
      'desc' => [
        'en' => 'Editing Event Comment',
      ],
    ],
  ];

}
