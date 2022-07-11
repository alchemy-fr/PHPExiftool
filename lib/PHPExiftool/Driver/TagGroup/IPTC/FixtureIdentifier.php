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
class FixtureIdentifier extends AbstractTagGroup
{

  protected string $id = 'IPTC:FixtureIdentifier';

  protected string $name = 'FixtureIdentifier';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Fixture Identifier',
    'fr' => 'Identificateur d\'installation',
  ];

  protected int $count = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150250
       * type : string
       * writable : true
       * count : 32
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:FixtureIdentifier',
      'desc' => [
        'en' => 'Fixture Identifier',
        'fr' => 'Identificateur d\'installation',
      ],
    ],
  ];

}
