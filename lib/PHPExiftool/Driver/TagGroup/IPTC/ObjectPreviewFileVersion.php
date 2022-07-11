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
class ObjectPreviewFileVersion extends AbstractTagGroup
{

  protected string $id = 'IPTC:ObjectPreviewFileVersion';

  protected string $name = 'ObjectPreviewFileVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Object Preview File Version',
    'fr' => 'Version de format de fichier de la miniature de l\'objet',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 151244
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:ObjectPreviewFileVersion',
      'desc' => [
        'en' => 'Object Preview File Version',
        'fr' => 'Version de format de fichier de la miniature de l\'objet',
      ],
    ],
  ];

}
