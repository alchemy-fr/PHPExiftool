<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SupplementalCategories extends AbstractTagGroup
{

  protected string $id = 'XMP-photoshop:SupplementalCategories';

  protected string $name = 'SupplementalCategories';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Supplemental Categories',
    'fr' => 'Catégorie d\'appoint',
  ];

  protected int $count = 0;

  protected int $flags = 320;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::photoshop
       * line : 410707
       * type : string
       * writable : true
       * count : 
       * flags : Bag,List
       */
      'id' => 'XMP::photoshop.XMP-photoshop:SupplementalCategories',
      'desc' => [
        'en' => 'Supplemental Categories',
        'fr' => 'Catégorie d\'appoint',
      ],
    ],
  ];

}
