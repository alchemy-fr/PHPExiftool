<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Vorbis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Contact extends AbstractTagGroup
{

  protected string $id = 'Vorbis:Contact';

  protected string $name = 'Contact';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Contact',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : Vorbis::Comments
       * line : 396067
       * type : ?
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'Vorbis::Comments.Vorbis:Contact',
      'desc' => [
        'en' => 'Contact',
      ],
    ],
  ];

}
