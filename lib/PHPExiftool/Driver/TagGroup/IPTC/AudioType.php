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
class AudioType extends AbstractTagGroup
{

  protected string $id = 'IPTC:AudioType';

  protected string $name = 'AudioType';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Audio Type',
    'fr' => 'Type audio',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 150874
       * type : string
       * writable : true
       * count : 2
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:AudioType',
      'desc' => [
        'en' => 'Audio Type',
        'fr' => 'Type audio',
      ],
    ],
  ];

}
