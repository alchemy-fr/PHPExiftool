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
class NikonCaptureEditVersions extends AbstractTagGroup
{

  protected string $id = 'Nikon:NikonCaptureEditVersions';

  protected string $name = 'NikonCaptureEditVersions';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Nikon Capture Edit Versions',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199945
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Nikon::Main.Nikon:NikonCaptureEditVersions',
      'desc' => [
        'en' => 'Nikon Capture Edit Versions',
      ],
    ],
    1 => [
      /**
       * table_name : Nikon::Main
       * line : 199948
       * type : undef
       * writable : true
       * count : 
       * flags : Binary,Unsafe
       */
      'id' => 'Nikon::Main.Nikon:NikonCaptureEditVersions',
      'desc' => [
        'en' => 'Nikon Capture Edit Versions',
      ],
    ],
  ];

}
