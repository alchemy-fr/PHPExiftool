<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ocad;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OcadRevision extends AbstractTagGroup
{

  protected string $id = 'Ocad:OcadRevision';

  protected string $name = 'OcadRevision';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Ocad Revision',
  ];

  protected int $count = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : JPEG::Ocad
       * line : 153205
       * type : string
       * writable : false
       * count : 6
       * flags : 
       */
      'id' => 'JPEG::Ocad.Ocad:OcadRevision',
      'desc' => [
        'en' => 'Ocad Revision',
      ],
    ],
  ];

}
