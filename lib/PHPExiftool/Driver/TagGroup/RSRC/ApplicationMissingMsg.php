<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RSRC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApplicationMissingMsg extends AbstractTagGroup
{

  protected string $id = 'RSRC:ApplicationMissingMsg';

  protected string $name = 'ApplicationMissingMsg';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Application Missing Msg',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RSRC::Main
       * line : 329427
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RSRC::Main.RSRC:ApplicationMissingMsg',
      'desc' => [
        'en' => 'Application Missing Msg',
      ],
    ],
  ];

}
