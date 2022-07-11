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
class ExposureLockUsed extends AbstractTagGroup
{

  protected string $id = 'XMP-GPano:ExposureLockUsed';

  protected string $name = 'ExposureLockUsed';

  protected ?string $phpType = 'boolean';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Exposure Lock Used',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::GPano
       * line : 397446
       * type : boolean
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::GPano.XMP-GPano:ExposureLockUsed',
      'desc' => [
        'en' => 'Exposure Lock Used',
      ],
    ],
  ];

}
