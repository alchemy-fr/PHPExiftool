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
class FileOS extends AbstractTagGroup
{

  protected string $id = 'EXE:FileOS';

  protected string $name = 'FileOS';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'File OS',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : EXE::PEVersion
       * line : 109959
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'EXE::PEVersion.EXE:FileOS',
      'desc' => [
        'en' => 'File OS',
      ],
    ],
  ];

}
