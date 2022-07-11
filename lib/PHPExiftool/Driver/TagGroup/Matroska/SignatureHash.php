<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SignatureHash extends AbstractTagGroup
{

  protected string $id = 'Matroska:SignatureHash';

  protected string $name = 'SignatureHash';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Signature Hash',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 174264
       * type : unsigned
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Matroska::Main.Matroska:SignatureHash',
      'desc' => [
        'en' => 'Signature Hash',
      ],
    ],
  ];

}
