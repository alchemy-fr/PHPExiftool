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
class SignerContactInfo extends AbstractTagGroup
{

  protected string $id = 'PDF:SignerContactInfo';

  protected string $name = 'SignerContactInfo';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Signer Contact Info',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Signature
       * line : 264695
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::Signature.PDF:SignerContactInfo',
      'desc' => [
        'en' => 'Signer Contact Info',
      ],
    ],
  ];

}
