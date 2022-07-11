<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FaxRecvParams extends AbstractTagGroup
{

  protected string $id = 'ExifIFD:FaxRecvParams';

  protected string $name = 'FaxRecvParams';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Fax Recv Params',
    'fr' => 'Paramètres de réception Fax',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 114301
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.ExifIFD:FaxRecvParams',
      'desc' => [
        'en' => 'Fax Recv Params',
        'fr' => 'Paramètres de réception Fax',
      ],
    ],
  ];

}
