<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ChannelStatusMode extends AbstractTagGroup
{

  protected string $id = 'MXF:ChannelStatusMode';

  protected string $name = 'ChannelStatusMode';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Channel Status Mode',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171648
       * type : undef
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:ChannelStatusMode',
      'desc' => [
        'en' => 'Channel Status Mode',
      ],
    ],
  ];

}
