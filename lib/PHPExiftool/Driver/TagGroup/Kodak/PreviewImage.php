<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTagGroup
{

  protected string $id = 'Kodak:PreviewImage';

  protected string $name = 'PreviewImage';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Preview Image',
    'fr' => 'Aperçu',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Scrn
       * line : 158898
       * type : undef
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Scrn.Kodak:PreviewImage',
      'desc' => [
        'en' => 'Preview Image',
        'fr' => 'Aperçu',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::frea
       * line : 161005
       * type : ?
       * writable : false
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'Kodak::frea.Kodak:PreviewImage',
      'desc' => [
        'en' => 'Preview Image',
        'fr' => 'Aperçu',
      ],
    ],
  ];

}
