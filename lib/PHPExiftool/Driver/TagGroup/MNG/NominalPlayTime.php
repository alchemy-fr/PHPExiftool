<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NominalPlayTime extends AbstractTagGroup
{

  protected string $id = 'MNG:NominalPlayTime';

  protected string $name = 'NominalPlayTime';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Nominal Play Time',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::MNGHeader
       * line : 165444
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::MNGHeader.MNG:NominalPlayTime',
      'desc' => [
        'en' => 'Nominal Play Time',
      ],
    ],
  ];

}
