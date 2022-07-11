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
class HeaderVersion extends AbstractTagGroup
{

  protected string $id = 'File:HeaderVersion';

  protected string $name = 'HeaderVersion';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Header Version',
  ];

  protected int $count = 8;

  protected array $tags = [
    0 => [
      /**
       * table_name : DPX::Main
       * line : 105650
       * type : string
       * writable : false
       * count : 8
       * flags : 
       */
      'id' => 'DPX::Main.File:HeaderVersion',
      'desc' => [
        'en' => 'Header Version',
      ],
    ],
  ];

}
