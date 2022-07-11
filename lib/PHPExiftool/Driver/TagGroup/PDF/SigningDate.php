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
class SigningDate extends AbstractTagGroup
{

  protected string $id = 'PDF:SigningDate';

  protected string $name = 'SigningDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Signing Date',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Signature
       * line : 264703
       * type : date
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::Signature.PDF:SigningDate',
      'desc' => [
        'en' => 'Signing Date',
      ],
    ],
  ];

}
