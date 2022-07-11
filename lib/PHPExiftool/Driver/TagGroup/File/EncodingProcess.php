<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EncodingProcess extends AbstractTagGroup
{

  protected string $id = 'File:EncodingProcess';

  protected string $name = 'EncodingProcess';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Encoding Process',
    'fr' => 'Procédé de codage',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::SOF
       * line : 153239
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'JPEG::SOF.File:EncodingProcess',
      'desc' => [
        'en' => 'Encoding Process',
        'fr' => 'Procédé de codage',
      ],
    ],
  ];

}
