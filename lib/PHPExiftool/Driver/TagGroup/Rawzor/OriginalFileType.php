<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Rawzor;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalFileType extends AbstractTagGroup
{

  protected string $id = 'Rawzor:OriginalFileType';

  protected string $name = 'OriginalFileType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Original File Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Rawzor::Main
       * line : 329954
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Rawzor::Main.Rawzor:OriginalFileType',
      'desc' => [
        'en' => 'Original File Type',
      ],
    ],
  ];

}
