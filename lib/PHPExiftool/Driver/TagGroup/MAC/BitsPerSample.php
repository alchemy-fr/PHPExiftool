<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BitsPerSample extends AbstractTagGroup
{

  protected string $id = 'MAC:BitsPerSample';

  protected string $name = 'BitsPerSample';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Bits Per Sample',
    'fr' => 'Nombre de bits par échantillon',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : APE::NewHeader
       * line : 369
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'APE::NewHeader.MAC:BitsPerSample',
      'desc' => [
        'en' => 'Bits Per Sample',
        'fr' => 'Nombre de bits par échantillon',
      ],
    ],
  ];

}
