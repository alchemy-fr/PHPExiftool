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
class LinkedProfileName extends AbstractTagGroup
{

  protected string $id = 'File:LinkedProfileName';

  protected string $name = 'LinkedProfileName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Linked Profile Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : BMP::Extra
       * line : 3173
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'BMP::Extra.File:LinkedProfileName',
      'desc' => [
        'en' => 'Linked Profile Name',
      ],
    ],
  ];

}
