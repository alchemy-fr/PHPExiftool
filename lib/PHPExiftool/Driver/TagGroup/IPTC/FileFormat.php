<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileFormat extends AbstractTagGroup
{

  protected string $id = 'IPTC:FileFormat';

  protected string $name = 'FileFormat';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'File Format',
    'fr' => 'Format de fichier',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::EnvelopeRecord
       * line : 151354
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::EnvelopeRecord.IPTC:FileFormat',
      'desc' => [
        'en' => 'File Format',
        'fr' => 'Format de fichier',
      ],
    ],
  ];

}
