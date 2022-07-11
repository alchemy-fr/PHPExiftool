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
class ApertureValue extends AbstractTagGroup
{

  protected string $id = 'Kodak:ApertureValue';

  protected string $name = 'ApertureValue';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Aperture Value',
    'fr' => 'Ouverture',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::Free
       * line : 154830
       * type : int16s
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Kodak::Free.Kodak:ApertureValue',
      'desc' => [
        'en' => 'Aperture Value',
        'fr' => 'Ouverture',
      ],
    ],
  ];

}
