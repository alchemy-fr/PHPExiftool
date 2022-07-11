<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JPEG_HDR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CorrectionMethod extends AbstractTagGroup
{

  protected string $id = 'JPEG-HDR:CorrectionMethod';

  protected string $name = 'CorrectionMethod';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Correction Method',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::HDR
       * line : 152817
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::HDR.JPEG-HDR:CorrectionMethod',
      'desc' => [
        'en' => 'Correction Method',
      ],
    ],
  ];

}
