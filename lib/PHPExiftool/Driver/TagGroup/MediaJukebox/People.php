<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MediaJukebox;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class People extends AbstractTagGroup
{

  protected string $id = 'MediaJukebox:People';

  protected string $name = 'People';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'People',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::MediaJukebox
       * line : 153090
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::MediaJukebox.MediaJukebox:People',
      'desc' => [
        'en' => 'People',
      ],
    ],
  ];

}
