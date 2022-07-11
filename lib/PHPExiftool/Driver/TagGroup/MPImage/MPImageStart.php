<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPImage;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MPImageStart extends AbstractTagGroup
{

  protected string $id = 'MPImage:MPImageStart';

  protected string $name = 'MPImageStart';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'MP Image Start',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPF::MPImage
       * line : 166571
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPF::MPImage.MPImage:MPImageStart',
      'desc' => [
        'en' => 'MP Image Start',
      ],
    ],
  ];

}
