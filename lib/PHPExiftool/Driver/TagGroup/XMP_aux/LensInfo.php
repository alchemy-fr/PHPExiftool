<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_aux;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensInfo extends AbstractTagGroup
{

  protected string $id = 'XMP-aux:LensInfo';

  protected string $name = 'LensInfo';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Lens Info',
    'fr' => 'Informations sur l\'objectif',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::aux
       * line : 398346
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::aux.XMP-aux:LensInfo',
      'desc' => [
        'en' => 'Lens Info',
        'fr' => 'Informations sur l\'objectif',
      ],
    ],
  ];

}
