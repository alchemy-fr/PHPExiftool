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
class NikonCaptureVersion extends AbstractTagGroup
{

  protected string $id = 'Nikon:NikonCaptureVersion';

  protected string $name = 'NikonCaptureVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Nikon Capture Version',
    'fr' => 'Version Nikon Capture',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199931
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Nikon::Main.Nikon:NikonCaptureVersion',
      'desc' => [
        'en' => 'Nikon Capture Version',
        'fr' => 'Version Nikon Capture',
      ],
    ],
  ];

}
