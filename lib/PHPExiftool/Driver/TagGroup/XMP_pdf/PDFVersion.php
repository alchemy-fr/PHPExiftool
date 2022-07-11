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
class PDFVersion extends AbstractTagGroup
{

  protected string $id = 'XMP-pdf:PDFVersion';

  protected string $name = 'PDFVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'PDF Version',
    'fr' => 'Version PDF',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::pdf
       * line : 410359
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::pdf.XMP-pdf:PDFVersion',
      'desc' => [
        'en' => 'PDF Version',
        'fr' => 'Version PDF',
      ],
    ],
  ];

}
