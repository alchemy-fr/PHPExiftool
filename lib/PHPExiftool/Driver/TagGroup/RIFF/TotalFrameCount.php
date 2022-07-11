<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TotalFrameCount extends AbstractTagGroup
{

  protected string $id = 'RIFF:TotalFrameCount';

  protected string $name = 'TotalFrameCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Total Frame Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::ExtAVIHdr
       * line : 328302
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::ExtAVIHdr.RIFF:TotalFrameCount',
      'desc' => [
        'en' => 'Total Frame Count',
      ],
    ],
  ];

}
