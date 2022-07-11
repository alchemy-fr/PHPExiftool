<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SonyIDC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CropArea extends AbstractTagGroup
{

  protected string $id = 'SonyIDC:CropArea';

  protected string $name = 'CropArea';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Crop Area',
  ];

  protected int $count = 4;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : SonyIDC::Main
       * line : 394781
       * type : int32u
       * writable : true
       * count : 4
       * flags : Permanent
       */
      'id' => 'SonyIDC::Main.SonyIDC:CropArea',
      'desc' => [
        'en' => 'Crop Area',
      ],
    ],
  ];

}
