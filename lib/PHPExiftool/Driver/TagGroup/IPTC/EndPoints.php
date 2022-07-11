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
class EndPoints extends AbstractTagGroup
{

  protected string $id = 'IPTC:EndPoints';

  protected string $name = 'EndPoints';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'End Points',
    'fr' => 'Points de terminaison',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 152207
       * type : ?
       * writable : true
       * count : 
       * flags : Binary
       */
      'id' => 'IPTC::NewsPhoto.IPTC:EndPoints',
      'desc' => [
        'en' => 'End Points',
        'fr' => 'Points de terminaison',
      ],
    ],
  ];

}
