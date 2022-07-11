<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EPPIM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrintIM extends AbstractTagGroup
{

  protected string $id = 'EPPIM:PrintIM';

  protected string $name = 'PrintIM';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Print Image Matching',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::EPPIM
       * line : 152778
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'JPEG::EPPIM.EPPIM:PrintIM',
      'desc' => [
        'en' => 'Print Image Matching',
      ],
    ],
  ];

}
