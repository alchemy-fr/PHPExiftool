<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MetaIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraOwner extends AbstractTagGroup
{

  protected string $id = 'MetaIFD:CameraOwner';

  protected string $name = 'CameraOwner';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Camera Owner',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Meta
       * line : 158722
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Kodak::Meta.MetaIFD:CameraOwner',
      'desc' => [
        'en' => 'Camera Owner',
      ],
    ],
  ];

}
