<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RicohRDC2 extends AbstractTagGroup
{

  protected string $id = 'Ricoh:RicohRDC2';

  protected string $name = 'RicohRDC2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Ricoh RDC2',
  ];

  protected int $count = 0;

  protected int $flags = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::AVI
       * line : 332138
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'Ricoh::AVI.Ricoh:RicohRDC2',
      'desc' => [
        'en' => 'Ricoh RDC2',
      ],
    ],
  ];

}
