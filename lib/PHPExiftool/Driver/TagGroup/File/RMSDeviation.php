<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RMSDeviation extends AbstractTagGroup
{

  protected string $id = 'File:RMSDeviation';

  protected string $name = 'RMSDeviation';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'RMS Deviation',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::Main
       * line : 167319
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MRC::Main.File:RMSDeviation',
      'desc' => [
        'en' => 'RMS Deviation',
      ],
    ],
  ];

}
