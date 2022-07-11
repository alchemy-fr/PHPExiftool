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
class SampleBits extends AbstractTagGroup
{

  protected string $id = 'MIE-Audio:SampleBits';

  protected string $name = 'SampleBits';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Sample Bits',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Audio
       * line : 163122
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Audio.MIE-Audio:SampleBits',
      'desc' => [
        'en' => 'Sample Bits',
      ],
    ],
  ];

}
