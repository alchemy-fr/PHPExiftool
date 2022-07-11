<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photomech;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EditStatus extends AbstractTagGroup
{

  protected string $id = 'XMP-photomech:EditStatus';

  protected string $name = 'EditStatus';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Edit Status',
    'fr' => 'Statut d\'édition',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PhotoMechanic::XMP
       * line : 305272
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PhotoMechanic::XMP.XMP-photomech:EditStatus',
      'desc' => [
        'en' => 'Edit Status',
        'fr' => 'Statut d\'édition',
      ],
    ],
  ];

}
