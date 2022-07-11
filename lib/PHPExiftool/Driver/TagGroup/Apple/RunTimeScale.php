<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Apple;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RunTimeScale extends AbstractTagGroup
{

  protected string $id = 'Apple:RunTimeScale';

  protected string $name = 'RunTimeScale';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Run Time Scale',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Apple::RunTime
       * line : 2967
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Apple::RunTime.Apple:RunTimeScale',
      'desc' => [
        'en' => 'Run Time Scale',
      ],
    ],
  ];

}
