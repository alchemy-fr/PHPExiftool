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
class MaxAperture extends AbstractTagGroup
{

  protected string $id = 'Kodak:MaxAperture';

  protected string $name = 'MaxAperture';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Max Aperture',
    'fr' => 'Données Avmin',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::SubIFD2
       * line : 159463
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::SubIFD2.Kodak:MaxAperture',
      'desc' => [
        'en' => 'Max Aperture',
        'fr' => 'Données Avmin',
      ],
    ],
    1 => [
      /**
       * table_name : Kodak::TextualInfo
       * line : 160058
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::TextualInfo.Kodak:MaxAperture',
      'desc' => [
        'en' => 'Max Aperture',
        'fr' => 'Données Avmin',
      ],
    ],
  ];

}
