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
class NikonCaptureOffsets extends AbstractTagGroup
{

  protected string $id = 'Nikon:NikonCaptureOffsets';

  protected string $name = 'NikonCaptureOffsets';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Nikon Capture Offsets',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199940
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Nikon::Main.Nikon:NikonCaptureOffsets',
      'desc' => [
        'en' => 'Nikon Capture Offsets',
      ],
    ],
  ];

}
