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
class Channels extends AbstractTagGroup
{

  protected string $id = 'MIE-Audio:Channels';

  protected string $name = 'Channels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Channels',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Audio
       * line : 163103
       * type : int8u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Audio.MIE-Audio:Channels',
      'desc' => [
        'en' => 'Channels',
      ],
    ],
  ];

}
