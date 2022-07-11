<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeCode extends AbstractTagGroup
{

  protected string $id = 'H264:TimeCode';

  protected string $name = 'TimeCode';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Time Code',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : H264::MDPM
       * line : 140692
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.H264:TimeCode',
      'desc' => [
        'en' => 'Time Code',
      ],
    ],
  ];

}
