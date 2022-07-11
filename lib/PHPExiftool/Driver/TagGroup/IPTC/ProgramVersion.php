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
class ProgramVersion extends AbstractTagGroup
{

  protected string $id = 'IPTC:ProgramVersion';

  protected string $name = 'ProgramVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Program Version',
    'fr' => 'Version du programme',
  ];

  protected int $count = 10;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150502
       * type : string
       * writable : true
       * count : 10
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:ProgramVersion',
      'desc' => [
        'en' => 'Program Version',
        'fr' => 'Version du programme',
      ],
    ],
  ];

}
