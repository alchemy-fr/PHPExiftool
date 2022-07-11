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
class FilterParametersExportExportData extends AbstractTagGroup
{

  protected string $id = 'NineEdits:FilterParametersExportExportData';

  protected string $name = 'FilterParametersExportExportData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Filter Parameters Export Export Data',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::NineEdits
       * line : 203951
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Nikon::NineEdits.NineEdits:FilterParametersExportExportData',
      'desc' => [
        'en' => 'Filter Parameters Export Export Data',
      ],
    ],
  ];

}
