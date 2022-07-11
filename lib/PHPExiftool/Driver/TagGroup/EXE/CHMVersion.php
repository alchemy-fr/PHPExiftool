<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CHMVersion extends AbstractTagGroup
{

  protected string $id = 'EXE:CHMVersion';

  protected string $name = 'CHMVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'CHM Version',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::CHM
       * line : 107893
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::CHM.EXE:CHMVersion',
      'desc' => [
        'en' => 'CHM Version',
      ],
    ],
  ];

}
