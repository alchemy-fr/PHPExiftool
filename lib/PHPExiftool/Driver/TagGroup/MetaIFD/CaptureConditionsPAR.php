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
class CaptureConditionsPAR extends AbstractTagGroup
{

  protected string $id = 'MetaIFD:CaptureConditionsPAR';

  protected string $name = 'CaptureConditionsPAR';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Capture Conditions PAR',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Meta
       * line : 158718
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Kodak::Meta.MetaIFD:CaptureConditionsPAR',
      'desc' => [
        'en' => 'Capture Conditions PAR',
      ],
    ],
  ];

}
