<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawImageSize extends AbstractTagGroup
{

  protected string $id = 'Pentax:RawImageSize';

  protected string $name = 'RawImageSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Raw Image Size',
    'fr' => 'Taille d\'image RAW',
  ];

  protected int $count = 2;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::Main
       * line : 299751
       * type : int16u
       * writable : false
       * count : 2
       * flags : Permanent
       */
      'id' => 'Pentax::Main.Pentax:RawImageSize',
      'desc' => [
        'en' => 'Raw Image Size',
        'fr' => 'Taille d\'image RAW',
      ],
    ],
  ];

}
