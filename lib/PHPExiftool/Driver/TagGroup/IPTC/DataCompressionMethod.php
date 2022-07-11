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
class DataCompressionMethod extends AbstractTagGroup
{

  protected string $id = 'IPTC:DataCompressionMethod';

  protected string $name = 'DataCompressionMethod';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Data Compression Method',
    'fr' => 'Fournisseur/propriétaire de l\'algorithme de compression de données',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : IPTC::NewsPhoto
       * line : 152133
       * type : int32u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'IPTC::NewsPhoto.IPTC:DataCompressionMethod',
      'desc' => [
        'en' => 'Data Compression Method',
        'fr' => 'Fournisseur/propriétaire de l\'algorithme de compression de données',
      ],
    ],
  ];

}
