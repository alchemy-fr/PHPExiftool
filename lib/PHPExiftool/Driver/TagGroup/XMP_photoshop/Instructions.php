<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Instructions extends AbstractTagGroup
{

  protected string $id = 'XMP-photoshop:Instructions';

  protected string $name = 'Instructions';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Instructions',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::photoshop
       * line : 410647
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::photoshop.XMP-photoshop:Instructions',
      'desc' => [
        'en' => 'Instructions',
      ],
    ],
  ];

}
