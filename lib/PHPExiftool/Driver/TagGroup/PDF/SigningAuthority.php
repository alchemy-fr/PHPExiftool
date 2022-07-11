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
class SigningAuthority extends AbstractTagGroup
{

  protected string $id = 'PDF:SigningAuthority';

  protected string $name = 'SigningAuthority';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Signing Authority',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Signature
       * line : 264707
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::Signature.PDF:SigningAuthority',
      'desc' => [
        'en' => 'Signing Authority',
      ],
    ],
  ];

}
