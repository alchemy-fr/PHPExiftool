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
class PreviewDateTime extends AbstractTagGroup
{

  protected string $id = 'IFD0:PreviewDateTime';

  protected string $name = 'PreviewDateTime';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Date Time',
    'fr' => 'Horodatage d\'aperçu',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 120634
       * type : string
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Exif::Main.IFD0:PreviewDateTime',
      'desc' => [
        'en' => 'Preview Date Time',
        'fr' => 'Horodatage d\'aperçu',
      ],
    ],
  ];

}
