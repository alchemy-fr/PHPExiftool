<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawAndJpgRecording extends AbstractTagGroup
{

  protected string $id = 'CanonCustom:RawAndJpgRecording';

  protected string $name = 'RawAndJpgRecording';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Raw And Jpg Recording',
    'fr' => 'Enregistrement RAW et JPEG',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonCustom::Functions10D
       * line : 71555
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'CanonCustom::Functions10D.CanonCustom:RawAndJpgRecording',
      'desc' => [
        'en' => 'Raw And Jpg Recording',
        'fr' => 'Enregistrement RAW et JPEG',
      ],
    ],
  ];

}
