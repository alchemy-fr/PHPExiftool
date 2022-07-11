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
class InputStackFilename extends AbstractTagGroup
{

  protected string $id = 'File:InputStackFilename';

  protected string $name = 'InputStackFilename';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Input Stack Filename',
  ];

  protected int $count = 80;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::FEI12
       * line : 167073
       * type : string
       * writable : false
       * count : 80
       * flags : 
       */
      'id' => 'MRC::FEI12.File:InputStackFilename',
      'desc' => [
        'en' => 'Input Stack Filename',
      ],
    ],
  ];

}
