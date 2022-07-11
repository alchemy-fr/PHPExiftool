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
class FilterParametersBinary extends AbstractTagGroup
{

  protected string $id = 'NineEdits:FilterParametersBinary';

  protected string $name = 'FilterParametersBinary';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Filter Parameters Binary',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::NineEdits
       * line : 203945
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Nikon::NineEdits.NineEdits:FilterParametersBinary',
      'desc' => [
        'en' => 'Filter Parameters Binary',
      ],
    ],
  ];

}
