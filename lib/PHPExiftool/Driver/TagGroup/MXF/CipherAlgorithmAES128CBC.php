<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CipherAlgorithmAES128CBC extends AbstractTagGroup
{

  protected string $id = 'MXF:CipherAlgorithmAES128CBC';

  protected string $name = 'CipherAlgorithmAES128CBC';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Cipher Algorithm AES128 CBC',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172871
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:CipherAlgorithmAES128CBC',
      'desc' => [
        'en' => 'Cipher Algorithm AES128 CBC',
      ],
    ],
  ];

}
