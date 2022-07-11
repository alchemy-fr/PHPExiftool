<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v1;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Track extends AbstractTagGroup
{

  protected string $id = 'ID3v1:Track';

  protected string $name = 'Track';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Track',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : ID3::v1
       * line : 147623
       * type : int8u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'ID3::v1.ID3v1:Track',
      'desc' => [
        'en' => 'Track',
      ],
    ],
  ];

}
