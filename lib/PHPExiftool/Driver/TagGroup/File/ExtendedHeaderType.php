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
class ExtendedHeaderType extends AbstractTagGroup
{

  protected string $id = 'File:ExtendedHeaderType';

  protected string $name = 'ExtendedHeaderType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Extended Header Type',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::Main
       * line : 167306
       * type : string
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'MRC::Main.File:ExtendedHeaderType',
      'desc' => [
        'en' => 'Extended Header Type',
      ],
    ],
  ];

}
