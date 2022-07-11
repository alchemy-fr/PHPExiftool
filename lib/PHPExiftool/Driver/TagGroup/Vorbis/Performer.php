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
class Performer extends AbstractTagGroup
{

  protected string $id = 'Vorbis:Performer';

  protected string $name = 'Performer';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Performer',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : Vorbis::Comments
       * line : 396190
       * type : ?
       * writable : false
       * count : 
       * flags : List
       */
      'id' => 'Vorbis::Comments.Vorbis:Performer',
      'desc' => [
        'en' => 'Performer',
      ],
    ],
  ];

}
