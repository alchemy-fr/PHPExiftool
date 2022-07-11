<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_cc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class License extends AbstractTagGroup
{

  protected string $id = 'XMP-cc:License';

  protected string $name = 'License';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'License',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::cc
       * line : 398430
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::cc.XMP-cc:License',
      'desc' => [
        'en' => 'License',
      ],
    ],
  ];

}
