<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpDM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AltTimecodeTimeFormat extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpDM:AltTimecodeTimeFormat';

  protected string $name = 'AltTimecodeTimeFormat';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Alt Timecode Time Format',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpDM
       * line : 413170
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::xmpDM.XMP-xmpDM:AltTimecodeTimeFormat',
      'desc' => [
        'en' => 'Alt Timecode Time Format',
      ],
    ],
  ];

}
