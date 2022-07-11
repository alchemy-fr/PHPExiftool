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
class WindowsAtom extends AbstractTagGroup
{

  protected string $id = 'XMP-creatorAtom:WindowsAtom';

  protected string $name = 'WindowsAtom';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Windows Atom',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::creatorAtom
       * line : 401826
       * type : struct
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::creatorAtom.XMP-creatorAtom:WindowsAtom',
      'desc' => [
        'en' => 'Windows Atom',
      ],
    ],
  ];

}
