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
class BWF_UMID extends AbstractTagGroup
{

  protected string $id = 'RIFF:BWF_UMID';

  protected string $name = 'BWF_UMID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'BWF UMID',
  ];

  protected int $count = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::BroadcastExt
       * line : 328148
       * type : undef
       * writable : false
       * count : 64
       * flags : 
       */
      'id' => 'RIFF::BroadcastExt.RIFF:BWF_UMID',
      'desc' => [
        'en' => 'BWF UMID',
      ],
    ],
  ];

}
