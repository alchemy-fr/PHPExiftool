<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Balance extends AbstractTagGroup
{

  protected string $id = 'QuickTime:Balance';

  protected string $name = 'Balance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Balance',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::AudioHeader
       * line : 310707
       * type : fixed16s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::AudioHeader.QuickTime:Balance',
      'desc' => [
        'en' => 'Balance',
      ],
    ],
  ];

}
