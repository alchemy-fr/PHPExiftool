<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\EXE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LegalCopyright extends AbstractTagGroup
{

  protected string $id = 'EXE:LegalCopyright';

  protected string $name = 'LegalCopyright';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Legal Copyright',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::PEString
       * line : 109884
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::PEString.EXE:LegalCopyright',
      'desc' => [
        'en' => 'Legal Copyright',
      ],
    ],
  ];

}
