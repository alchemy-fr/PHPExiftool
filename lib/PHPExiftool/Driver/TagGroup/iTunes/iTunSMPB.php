<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\iTunes;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class iTunSMPB extends AbstractTagGroup
{

  protected string $id = 'iTunes:iTunSMPB';

  protected string $name = 'iTunSMPB';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'iTunSMPB',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::iTunesInfo
       * line : 327017
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::iTunesInfo.iTunes:iTunSMPB',
      'desc' => [
        'en' => 'iTunSMPB',
      ],
    ],
  ];

}
