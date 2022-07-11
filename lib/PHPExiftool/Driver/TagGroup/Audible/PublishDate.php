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
class PublishDate extends AbstractTagGroup
{

  protected string $id = 'Audible:PublishDate';

  protected string $name = 'PublishDate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Publish Date',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Audible::Main
       * line : 3027
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Audible::Main.Audible:PublishDate',
      'desc' => [
        'en' => 'Publish Date',
      ],
    ],
  ];

}
