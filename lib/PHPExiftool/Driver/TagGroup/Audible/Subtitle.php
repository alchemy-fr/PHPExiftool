<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Audible;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Subtitle extends AbstractTagGroup
{

  protected string $id = 'Audible:Subtitle';

  protected string $name = 'Subtitle';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Subtitle',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Audible::meta
       * line : 3106
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Audible::meta.Audible:Subtitle',
      'desc' => [
        'en' => 'Subtitle',
      ],
    ],
  ];

}
