<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Document extends AbstractTagGroup
{

  protected string $id = 'PNG:Document';

  protected string $name = 'Document';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Document',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PNG::TextualData
       * line : 273240
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PNG::TextualData.PNG:Document',
      'desc' => [
        'en' => 'Document',
      ],
    ],
  ];

}
