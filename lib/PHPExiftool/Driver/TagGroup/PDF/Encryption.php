<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Encryption extends AbstractTagGroup
{

  protected string $id = 'PDF:Encryption';

  protected string $name = 'Encryption';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Encryption',
    'fr' => 'Chiffrage',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Encrypt
       * line : 264408
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::Encrypt.PDF:Encryption',
      'desc' => [
        'en' => 'Encryption',
        'fr' => 'Chiffrage',
      ],
    ],
  ];

}
