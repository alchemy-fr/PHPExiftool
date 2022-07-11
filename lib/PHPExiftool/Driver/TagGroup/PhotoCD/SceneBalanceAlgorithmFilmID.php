<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoCD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SceneBalanceAlgorithmFilmID extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:SceneBalanceAlgorithmFilmID';

  protected string $name = 'SceneBalanceAlgorithmFilmID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scene Balance Algorithm Film ID',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 304198
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:SceneBalanceAlgorithmFilmID',
      'desc' => [
        'en' => 'Scene Balance Algorithm Film ID',
      ],
    ],
  ];

}
