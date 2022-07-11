<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FujiFilm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaMode extends AbstractTagGroup
{

  protected string $id = 'FujiFilm:AFAreaMode';

  protected string $name = 'AFAreaMode';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Area Mode',
    'fr' => 'Mode de zone AF',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : FujiFilm::FocusSettings
       * line : 128947
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'FujiFilm::FocusSettings.FujiFilm:AFAreaMode',
      'desc' => [
        'en' => 'AF Area Mode',
        'fr' => 'Mode de zone AF',
      ],
    ],
  ];

}
