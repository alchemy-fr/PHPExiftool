<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NITF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NITFVersion extends AbstractTagGroup
{

  protected string $id = 'NITF:NITFVersion';

  protected string $name = 'NITFVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'NITF Version',
  ];

  protected int $count = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::NITF
       * line : 153110
       * type : int8u
       * writable : false
       * count : 2
       * flags : 
       */
      'id' => 'JPEG::NITF.NITF:NITFVersion',
      'desc' => [
        'en' => 'NITF Version',
      ],
    ],
  ];

}
