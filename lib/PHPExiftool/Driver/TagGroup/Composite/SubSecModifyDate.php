<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubSecModifyDate extends AbstractTagGroup
{

  protected string $id = 'Composite:SubSecModifyDate';

  protected string $name = 'SubSecModifyDate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Modify Date',
    'fr' => 'Date de modification de fichier',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90519
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:SubSecModifyDate',
      'desc' => [
        'en' => 'Modify Date',
        'fr' => 'Date de modification de fichier',
      ],
    ],
  ];

}
