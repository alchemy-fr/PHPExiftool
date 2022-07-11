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
class CompressionFactor extends AbstractTagGroup
{

  protected string $id = 'Rawzor:CompressionFactor';

  protected string $name = 'CompressionFactor';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Compression Factor',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Rawzor::Main
       * line : 329944
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Rawzor::Main.Rawzor:CompressionFactor',
      'desc' => [
        'en' => 'Compression Factor',
      ],
    ],
  ];

}
