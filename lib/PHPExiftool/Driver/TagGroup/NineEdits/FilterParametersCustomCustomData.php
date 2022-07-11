<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NineEdits;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FilterParametersCustomCustomData extends AbstractTagGroup
{

  protected string $id = 'NineEdits:FilterParametersCustomCustomData';

  protected string $name = 'FilterParametersCustomCustomData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Filter Parameters Custom Custom Data',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::NineEdits
       * line : 203948
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Nikon::NineEdits.NineEdits:FilterParametersCustomCustomData',
      'desc' => [
        'en' => 'Filter Parameters Custom Custom Data',
      ],
    ],
  ];

}
