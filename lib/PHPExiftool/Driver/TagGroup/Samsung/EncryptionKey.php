<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EncryptionKey extends AbstractTagGroup
{

  protected string $id = 'Samsung:EncryptionKey';

  protected string $name = 'EncryptionKey';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Encryption Key',
  ];

  protected int $count = 11;

  protected int $flags = 20;

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::Type2
       * line : 335883
       * type : int32u
       * writable : true
       * count : 11
       * flags : Permanent,Unsafe
       */
      'id' => 'Samsung::Type2.Samsung:EncryptionKey',
      'desc' => [
        'en' => 'Encryption Key',
      ],
    ],
  ];

}
