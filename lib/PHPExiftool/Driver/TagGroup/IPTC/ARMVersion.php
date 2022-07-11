<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ARMVersion extends AbstractTagGroup
{

  protected string $id = 'IPTC:ARMVersion';

  protected string $name = 'ARMVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ARM Version',
    'fr' => 'Version ARM',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::EnvelopeRecord
       * line : 151670
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::EnvelopeRecord.IPTC:ARMVersion',
      'desc' => [
        'en' => 'ARM Version',
        'fr' => 'Version ARM',
      ],
    ],
  ];

}
