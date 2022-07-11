<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\All;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JpgFromRaw extends AbstractTagGroup
{

  protected string $id = 'All:JpgFromRaw';

  protected string $name = 'JpgFromRaw';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Jpg From Raw',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90395
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Composite.All:JpgFromRaw',
      'desc' => [
        'en' => 'Jpg From Raw',
      ],
    ],
  ];

}
