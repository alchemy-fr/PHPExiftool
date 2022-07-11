<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioEncoding extends AbstractTagGroup
{

  protected string $id = 'Flash:AudioEncoding';

  protected string $name = 'AudioEncoding';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Encoding',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Flash::Audio
       * line : 124130
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Flash::Audio.Flash:AudioEncoding',
      'desc' => [
        'en' => 'Audio Encoding',
      ],
    ],
  ];

}
