<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UnknownRawHighlight extends AbstractTagGroup
{

  protected string $id = 'CanonVRD:UnknownRawHighlight';

  protected string $name = 'UnknownRawHighlight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Unknown Raw Highlight',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonVRD::Ver2
       * line : 83605
       * type : int16s
       * writable : true
       * count : 
       * flags : Unknown
       */
      'id' => 'CanonVRD::Ver2.CanonVRD:UnknownRawHighlight',
      'desc' => [
        'en' => 'Unknown Raw Highlight',
      ],
    ],
  ];

}
