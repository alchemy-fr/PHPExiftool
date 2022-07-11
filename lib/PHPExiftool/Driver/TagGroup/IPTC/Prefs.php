<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Prefs extends AbstractTagGroup
{

  protected string $id = 'IPTC:Prefs';

  protected string $name = 'Prefs';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Prefs',
  ];

  protected int $count = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 151264
       * type : string
       * writable : true
       * count : 64
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:Prefs',
      'desc' => [
        'en' => 'Prefs',
      ],
    ],
  ];

}
