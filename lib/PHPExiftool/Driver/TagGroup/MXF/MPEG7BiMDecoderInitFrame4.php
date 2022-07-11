<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MPEG7BiMDecoderInitFrame4 extends AbstractTagGroup
{

  protected string $id = 'MXF:MPEG7BiMDecoderInitFrame4';

  protected string $name = 'MPEG7BiMDecoderInitFrame4';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MPEG7 Bi M Decoder Init Frame 4',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172043
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:MPEG7BiMDecoderInitFrame4',
      'desc' => [
        'en' => 'MPEG7 Bi M Decoder Init Frame 4',
      ],
    ],
  ];

}
