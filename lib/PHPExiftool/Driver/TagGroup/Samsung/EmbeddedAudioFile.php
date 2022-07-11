<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EmbeddedAudioFile extends AbstractTagGroup
{

  protected string $id = 'Samsung:EmbeddedAudioFile';

  protected string $name = 'EmbeddedAudioFile';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Embedded Audio File',
  ];

  protected int $count = 0;

  protected int $flags = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Trailer
       * line : 334631
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'Samsung::Trailer.Samsung:EmbeddedAudioFile',
      'desc' => [
        'en' => 'Embedded Audio File',
      ],
    ],
  ];

}
