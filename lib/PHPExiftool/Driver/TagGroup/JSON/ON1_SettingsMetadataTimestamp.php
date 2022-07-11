<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JSON;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ON1_SettingsMetadataTimestamp extends AbstractTagGroup
{

  protected string $id = 'JSON:ON1_SettingsMetadataTimestamp';

  protected string $name = 'ON1_SettingsMetadataTimestamp';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'ON1 Settings Metadata Timestamp',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JSON::Main
       * line : 153733
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JSON::Main.JSON:ON1_SettingsMetadataTimestamp',
      'desc' => [
        'en' => 'ON1 Settings Metadata Timestamp',
      ],
    ],
  ];

}
