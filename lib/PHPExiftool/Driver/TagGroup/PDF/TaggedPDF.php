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
class TaggedPDF extends AbstractTagGroup
{

  protected string $id = 'PDF:TaggedPDF';

  protected string $name = 'TaggedPDF';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Tagged PDF',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::MarkInfo
       * line : 264640
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::MarkInfo.PDF:TaggedPDF',
      'desc' => [
        'en' => 'Tagged PDF',
      ],
    ],
  ];

}
