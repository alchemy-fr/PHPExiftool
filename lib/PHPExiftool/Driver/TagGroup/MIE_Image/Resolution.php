<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Image;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Resolution extends AbstractTagGroup
{

  protected string $id = 'MIE-Image:Resolution';

  protected string $name = 'Resolution';

  protected ?string $phpType = 'float';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Resolution',
    'fr' => 'Résolution d\'image',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Image
       * line : 164223
       * type : rational64u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Image.MIE-Image:Resolution',
      'desc' => [
        'en' => 'Resolution',
        'fr' => 'Résolution d\'image',
      ],
    ],
  ];

}
