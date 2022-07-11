<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TextFormat extends AbstractTagGroup
{

  protected string $id = 'RIFF:TextFormat';

  protected string $name = 'TextFormat';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Text Format',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Stream
       * line : 329091
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Stream.RIFF:TextFormat',
      'desc' => [
        'en' => 'Text Format',
      ],
    ],
  ];

}
