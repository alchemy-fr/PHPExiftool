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
class Application extends AbstractTagGroup
{

  protected string $id = 'File:Application';

  protected string $name = 'Application';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Application',
  ];

  protected int $count = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::FEI12
       * line : 166761
       * type : string
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'MRC::FEI12.File:Application',
      'desc' => [
        'en' => 'Application',
      ],
    ],
  ];

}
