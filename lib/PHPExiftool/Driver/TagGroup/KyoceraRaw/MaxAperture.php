<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KyoceraRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MaxAperture extends AbstractTagGroup
{

  protected string $id = 'KyoceraRaw:MaxAperture';

  protected string $name = 'MaxAperture';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Max Aperture',
    'fr' => 'Données Avmin',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : KyoceraRaw::Main
       * line : 161225
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'KyoceraRaw::Main.KyoceraRaw:MaxAperture',
      'desc' => [
        'en' => 'Max Aperture',
        'fr' => 'Données Avmin',
      ],
    ],
  ];

}
