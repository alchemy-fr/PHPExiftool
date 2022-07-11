<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OutputAudioSampleRate extends AbstractTagGroup
{

  protected string $id = 'Matroska:OutputAudioSampleRate';

  protected string $name = 'OutputAudioSampleRate';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Output Audio Sample Rate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 174236
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Matroska::Main.Matroska:OutputAudioSampleRate',
      'desc' => [
        'en' => 'Output Audio Sample Rate',
      ],
    ],
  ];

}
