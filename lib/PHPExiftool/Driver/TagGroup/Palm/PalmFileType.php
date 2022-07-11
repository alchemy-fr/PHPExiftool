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
class PalmFileType extends AbstractTagGroup
{

  protected string $id = 'Palm:PalmFileType';

  protected string $name = 'PalmFileType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Palm File Type',
  ];

  protected int $count = 8;

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::Main
       * line : 274213
       * type : undef
       * writable : false
       * count : 8
       * flags : 
       */
      'id' => 'Palm::Main.Palm:PalmFileType',
      'desc' => [
        'en' => 'Palm File Type',
      ],
    ],
  ];

}
