<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeZone extends AbstractTagGroup
{

  protected string $id = 'Canon:TimeZone';

  protected string $name = 'TimeZone';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Time Zone',
    'fr' => 'Fuseau horaire',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::TimeInfo
       * line : 70957
       * type : int32s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Canon::TimeInfo.Canon:TimeZone',
      'desc' => [
        'en' => 'Time Zone',
        'fr' => 'Fuseau horaire',
      ],
    ],
  ];

}
