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
class ModificationNumber extends AbstractTagGroup
{

  protected string $id = 'Palm:ModificationNumber';

  protected string $name = 'ModificationNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Modification Number',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::Main
       * line : 274209
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Palm::Main.Palm:ModificationNumber',
      'desc' => [
        'en' => 'Modification Number',
      ],
    ],
  ];

}
