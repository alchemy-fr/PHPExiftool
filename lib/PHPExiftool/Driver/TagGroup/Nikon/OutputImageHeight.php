<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OutputImageHeight extends AbstractTagGroup
{

  protected string $id = 'Nikon:OutputImageHeight';

  protected string $name = 'OutputImageHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Output Image Height',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::CaptureOutput
       * line : 192258
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::CaptureOutput.Nikon:OutputImageHeight',
      'desc' => [
        'en' => 'Output Image Height',
      ],
    ],
  ];

}
