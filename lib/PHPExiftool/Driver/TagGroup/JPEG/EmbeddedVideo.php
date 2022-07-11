<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPEG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EmbeddedVideo extends AbstractTagGroup
{

  protected string $id = 'JPEG:EmbeddedVideo';

  protected string $name = 'EmbeddedVideo';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Embedded Video',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::Main
       * line : 153013
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::Main.JPEG:EmbeddedVideo',
      'desc' => [
        'en' => 'Embedded Video',
      ],
    ],
  ];

}
