<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Main;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TrailerSignature extends AbstractTagGroup
{

  protected string $id = 'MIE-Main:TrailerSignature';

  protected string $name = 'TrailerSignature';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Trailer Signature',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Main
       * line : 164419
       * type : undef
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Main.MIE-Main:TrailerSignature',
      'desc' => [
        'en' => 'Trailer Signature',
      ],
    ],
  ];

}
