<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShutterCurtainHack extends AbstractTagGroup
{

  protected string $id = 'Composite:ShutterCurtainHack';

  protected string $name = 'ShutterCurtainHack';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Shutter Curtain Sync',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90241
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:ShutterCurtainHack',
      'desc' => [
        'en' => 'Shutter Curtain Sync',
      ],
    ],
  ];

}
