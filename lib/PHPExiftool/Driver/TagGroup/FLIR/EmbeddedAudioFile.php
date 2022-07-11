<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EmbeddedAudioFile extends AbstractTagGroup
{

  protected string $id = 'FLIR:EmbeddedAudioFile';

  protected string $name = 'EmbeddedAudioFile';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Embedded Audio File',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::FFF
       * line : 122775
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::FFF.FLIR:EmbeddedAudioFile',
      'desc' => [
        'en' => 'Embedded Audio File',
      ],
    ],
  ];

}
