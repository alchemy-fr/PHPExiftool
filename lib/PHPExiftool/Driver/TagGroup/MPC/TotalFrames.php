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
class TotalFrames extends AbstractTagGroup
{

  protected string $id = 'MPC:TotalFrames';

  protected string $name = 'TotalFrames';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Total Frames',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPC::Main
       * line : 165842
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPC::Main.MPC:TotalFrames',
      'desc' => [
        'en' => 'Total Frames',
      ],
    ],
  ];

}
