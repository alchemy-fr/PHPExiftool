<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Follow_meMode extends AbstractTagGroup
{

  protected string $id = 'Parrot:Follow-meMode';

  protected string $name = 'Follow-meMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Follow-me Mode',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Parrot::FollowMe
       * line : 282317
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Parrot::FollowMe.Parrot:Follow-meMode',
      'desc' => [
        'en' => 'Follow-me Mode',
      ],
    ],
  ];

}
