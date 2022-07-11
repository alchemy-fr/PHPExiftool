<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PDFVersion extends AbstractTagGroup
{

  protected string $id = 'PDF:PDFVersion';

  protected string $name = 'PDFVersion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'PDF Version',
    'fr' => 'Version PDF',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Root
       * line : 264685
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::Root.PDF:PDFVersion',
      'desc' => [
        'en' => 'PDF Version',
        'fr' => 'Version PDF',
      ],
    ],
  ];

}
