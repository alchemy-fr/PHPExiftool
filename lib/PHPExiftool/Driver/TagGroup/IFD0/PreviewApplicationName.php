<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewApplicationName extends AbstractTagGroup
{

  protected string $id = 'IFD0:PreviewApplicationName';

  protected string $name = 'PreviewApplicationName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Application Name',
    'fr' => 'Nom de l\'application d\'aperçu',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120557
       * type : string
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:PreviewApplicationName',
      'desc' => [
        'en' => 'Preview Application Name',
        'fr' => 'Nom de l\'application d\'aperçu',
      ],
    ],
  ];

}
