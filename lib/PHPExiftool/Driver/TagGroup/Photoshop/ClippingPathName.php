<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ClippingPathName extends AbstractTagGroup
{

  protected string $id = 'Photoshop:ClippingPathName';

  protected string $name = 'ClippingPathName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Clipping Path Name',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Photoshop::Main
       * line : 306029
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Photoshop::Main.Photoshop:ClippingPathName',
      'desc' => [
        'en' => 'Clipping Path Name',
      ],
    ],
  ];

}
