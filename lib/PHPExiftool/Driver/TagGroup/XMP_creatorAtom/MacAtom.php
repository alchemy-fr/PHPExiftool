<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_creatorAtom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MacAtom extends AbstractTagGroup
{

  protected string $id = 'XMP-creatorAtom:MacAtom';

  protected string $name = 'MacAtom';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Mac Atom',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::creatorAtom
       * line : 401814
       * type : struct
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::creatorAtom.XMP-creatorAtom:MacAtom',
      'desc' => [
        'en' => 'Mac Atom',
      ],
    ],
  ];

}
