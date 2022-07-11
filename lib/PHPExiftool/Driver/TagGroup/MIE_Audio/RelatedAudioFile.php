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
class RelatedAudioFile extends AbstractTagGroup
{

  protected string $id = 'MIE-Audio:RelatedAudioFile';

  protected string $name = 'RelatedAudioFile';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Related Audio File',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Audio
       * line : 163132
       * type : undef
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'MIE::Audio.MIE-Audio:RelatedAudioFile',
      'desc' => [
        'en' => 'Related Audio File',
      ],
    ],
  ];

}
