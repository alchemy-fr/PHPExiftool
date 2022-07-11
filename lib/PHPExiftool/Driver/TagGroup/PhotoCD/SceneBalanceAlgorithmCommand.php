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
class SceneBalanceAlgorithmCommand extends AbstractTagGroup
{

  protected string $id = 'PhotoCD:SceneBalanceAlgorithmCommand';

  protected string $name = 'SceneBalanceAlgorithmCommand';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Scene Balance Algorithm Command',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoCD::Main
       * line : 304173
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PhotoCD::Main.PhotoCD:SceneBalanceAlgorithmCommand',
      'desc' => [
        'en' => 'Scene Balance Algorithm Command',
      ],
    ],
  ];

}
