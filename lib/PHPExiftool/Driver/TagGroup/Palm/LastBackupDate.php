<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Palm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LastBackupDate extends AbstractTagGroup
{

  protected string $id = 'Palm:LastBackupDate';

  protected string $name = 'LastBackupDate';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Last Backup Date',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::Main
       * line : 274205
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Palm::Main.Palm:LastBackupDate',
      'desc' => [
        'en' => 'Last Backup Date',
      ],
    ],
  ];

}
