<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_pdf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModDate extends AbstractTagGroup
{

  protected string $id = 'XMP-pdf:ModDate';

  protected string $name = 'ModDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Mod Date',
    'fr' => 'Date de modification',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::pdf
       * line : 410354
       * type : date
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::pdf.XMP-pdf:ModDate',
      'desc' => [
        'en' => 'Mod Date',
        'fr' => 'Date de modification',
      ],
    ],
  ];

}
