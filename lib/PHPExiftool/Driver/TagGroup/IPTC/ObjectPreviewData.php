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
class ObjectPreviewData extends AbstractTagGroup
{

  protected string $id = 'IPTC:ObjectPreviewData';

  protected string $name = 'ObjectPreviewData';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Object Preview Data',
    'fr' => 'Données de la miniature de l\'objet',
  ];

  protected int $count = 256000;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::ApplicationRecord
       * line : 151254
       * type : undef
       * writable : true
       * count : 256000
       * flags : Binary
       */
      'id' => 'IPTC::ApplicationRecord.IPTC:ObjectPreviewData',
      'desc' => [
        'en' => 'Object Preview Data',
        'fr' => 'Données de la miniature de l\'objet',
      ],
    ],
  ];

}
