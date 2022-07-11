<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareRevision2 extends AbstractTagGroup
{

  protected string $id = 'Ricoh:FirmwareRevision2';

  protected string $name = 'FirmwareRevision2';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Firmware Revision 2',
  ];

  protected int $count = 12;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::FirmwareInfo
       * line : 332258
       * type : string
       * writable : true
       * count : 12
       * flags : Permanent
       */
      'id' => 'Ricoh::FirmwareInfo.Ricoh:FirmwareRevision2',
      'desc' => [
        'en' => 'Firmware Revision 2',
      ],
    ],
  ];

}
