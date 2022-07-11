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
class ICCProfileName extends AbstractTagGroup
{

  protected string $id = 'XMP-photoshop:ICCProfileName';

  protected string $name = 'ICCProfileName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'ICC Profile Name',
    'fr' => 'Nom du profil ICC',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::photoshop
       * line : 410641
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::photoshop.XMP-photoshop:ICCProfileName',
      'desc' => [
        'en' => 'ICC Profile Name',
        'fr' => 'Nom du profil ICC',
      ],
    ],
  ];

}
