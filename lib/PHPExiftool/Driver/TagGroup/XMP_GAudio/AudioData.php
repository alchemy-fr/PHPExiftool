<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GAudio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioData extends AbstractTagGroup
{

  protected string $id = 'XMP-GAudio:AudioData';

  protected string $name = 'AudioData';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Audio Data',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GAudio
       * line : 397194
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GAudio.XMP-GAudio:AudioData',
      'desc' => [
        'en' => 'Audio Data',
      ],
    ],
  ];

}
