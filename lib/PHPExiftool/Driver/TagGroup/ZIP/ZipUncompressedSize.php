<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ZIP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ZipUncompressedSize extends AbstractTagGroup
{

  protected string $id = 'ZIP:ZipUncompressedSize';

  protected string $name = 'ZipUncompressedSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Zip Uncompressed Size',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ZIP::Main
       * line : 415273
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ZIP::Main.ZIP:ZipUncompressedSize',
      'desc' => [
        'en' => 'Zip Uncompressed Size',
      ],
    ],
  ];

}
