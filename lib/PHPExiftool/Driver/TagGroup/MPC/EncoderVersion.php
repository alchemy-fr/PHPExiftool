<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EncoderVersion extends AbstractTagGroup
{

  protected string $id = 'MPC:EncoderVersion';

  protected string $name = 'EncoderVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Encoder Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPC::Main
       * line : 165998
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPC::Main.MPC:EncoderVersion',
      'desc' => [
        'en' => 'Encoder Version',
      ],
    ],
  ];

}
