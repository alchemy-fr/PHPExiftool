<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MIMEType extends AbstractTagGroup
{

  protected string $id = 'File:MIMEType';

  protected string $name = 'MIMEType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MIME Type',
    'fr' => 'Type MIME',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121800
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:MIMEType',
      'desc' => [
        'en' => 'MIME Type',
        'fr' => 'Type MIME',
      ],
    ],
  ];

}
