<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Audio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SampleRate extends AbstractTagGroup
{

  protected string $id = 'MIE-Audio:SampleRate';

  protected string $name = 'SampleRate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sample Rate',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Audio
       * line : 163126
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Audio.MIE-Audio:SampleRate',
      'desc' => [
        'en' => 'Sample Rate',
      ],
    ],
  ];

}
