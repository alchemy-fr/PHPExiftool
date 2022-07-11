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
class WindowsAtomInvocationFlags extends AbstractTagGroup
{

  protected string $id = 'XMP-creatorAtom:WindowsAtomInvocationFlags';

  protected string $name = 'WindowsAtomInvocationFlags';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Windows Atom Invocation Flags',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::creatorAtom
       * line : 401832
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::creatorAtom.XMP-creatorAtom:WindowsAtomInvocationFlags',
      'desc' => [
        'en' => 'Windows Atom Invocation Flags',
      ],
    ],
  ];

}
