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
class FirstPhotoDate extends AbstractTagGroup
{

  protected string $id = 'XMP-GPano:FirstPhotoDate';

  protected string $name = 'FirstPhotoDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'First Photo Date',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GPano
       * line : 397450
       * type : date
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GPano.XMP-GPano:FirstPhotoDate',
      'desc' => [
        'en' => 'First Photo Date',
      ],
    ],
  ];

}
