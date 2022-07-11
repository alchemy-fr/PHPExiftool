<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exifEX;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompositeImageCount extends AbstractTagGroup
{

  protected string $id = 'XMP-exifEX:CompositeImageCount';

  protected string $name = 'CompositeImageCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Composite Image Count',
  ];

  protected int $count = 0;

  protected int $flags = 576;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::exifEX
       * line : 408853
       * type : integer
       * writable : true
       * count : 
       * flags : List,Seq
       */
      'id' => 'XMP::exifEX.XMP-exifEX:CompositeImageCount',
      'desc' => [
        'en' => 'Composite Image Count',
      ],
    ],
  ];

}
