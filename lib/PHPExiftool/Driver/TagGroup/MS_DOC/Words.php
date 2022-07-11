<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MS_DOC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Words extends AbstractTagGroup
{

  protected string $id = 'MS-DOC:Words';

  protected string $name = 'Words';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Words',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::DOP
       * line : 124668
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::DOP.MS-DOC:Words',
      'desc' => [
        'en' => 'Words',
      ],
    ],
  ];

}
