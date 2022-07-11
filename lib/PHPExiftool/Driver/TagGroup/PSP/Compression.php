<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PSP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Compression extends AbstractTagGroup
{

  protected string $id = 'PSP:Compression';

  protected string $name = 'Compression';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Compression',
    'fr' => 'Schéma de compression',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PSP::Image
       * line : 273645
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PSP::Image.PSP:Compression',
      'desc' => [
        'en' => 'Compression',
        'fr' => 'Schéma de compression',
      ],
    ],
  ];

}
