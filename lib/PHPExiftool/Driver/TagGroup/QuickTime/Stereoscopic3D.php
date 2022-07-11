<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Stereoscopic3D extends AbstractTagGroup
{

  protected string $id = 'QuickTime:Stereoscopic3D';

  protected string $name = 'Stereoscopic3D';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Stereoscopic 3D',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::ImageDesc
       * line : 314373
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::ImageDesc.QuickTime:Stereoscopic3D',
      'desc' => [
        'en' => 'Stereoscopic 3D',
      ],
    ],
  ];

}
