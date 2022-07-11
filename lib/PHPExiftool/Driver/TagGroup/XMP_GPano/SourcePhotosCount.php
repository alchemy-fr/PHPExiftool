<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_GPano;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SourcePhotosCount extends AbstractTagGroup
{

  protected string $id = 'XMP-GPano:SourcePhotosCount';

  protected string $name = 'SourcePhotosCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Source Photos Count',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GPano
       * line : 397521
       * type : integer
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GPano.XMP-GPano:SourcePhotosCount',
      'desc' => [
        'en' => 'Source Photos Count',
      ],
    ],
  ];

}
