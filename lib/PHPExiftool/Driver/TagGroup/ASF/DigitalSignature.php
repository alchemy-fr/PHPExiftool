<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalSignature extends AbstractTagGroup
{

  protected string $id = 'ASF:DigitalSignature';

  protected string $name = 'DigitalSignature';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Digital Signature',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::Header
       * line : 1797
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::Header.ASF:DigitalSignature',
      'desc' => [
        'en' => 'Digital Signature',
      ],
    ],
  ];

}
