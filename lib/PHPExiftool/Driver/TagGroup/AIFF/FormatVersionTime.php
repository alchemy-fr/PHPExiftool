<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\AIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FormatVersionTime extends AbstractTagGroup
{

  protected string $id = 'AIFF:FormatVersionTime';

  protected string $name = 'FormatVersionTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Format Version Time',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : AIFF::FormatVers
       * line : 185
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'AIFF::FormatVers.AIFF:FormatVersionTime',
      'desc' => [
        'en' => 'Format Version Time',
      ],
    ],
  ];

}
