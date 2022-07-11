<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\LNK;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TargetFileDOSName extends AbstractTagGroup
{

  protected string $id = 'LNK:TargetFileDOSName';

  protected string $name = 'TargetFileDOSName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Target File DOS Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : LNK::Item0032
       * line : 161399
       * type : var_string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'LNK::Item0032.LNK:TargetFileDOSName',
      'desc' => [
        'en' => 'Target File DOS Name',
      ],
    ],
  ];

}
