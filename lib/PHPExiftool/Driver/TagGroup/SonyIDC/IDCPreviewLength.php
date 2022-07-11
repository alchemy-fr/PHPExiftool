<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SonyIDC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IDCPreviewLength extends AbstractTagGroup
{

  protected string $id = 'SonyIDC:IDCPreviewLength';

  protected string $name = 'IDCPreviewLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'IDC Preview Length',
  ];

  protected int $count = 0;

  protected int $flags = 12;

  protected array $tags = [
    0 => [
      /**
       * table_name : SonyIDC::Main
       * line : 394324
       * type : int32u
       * writable : true
       * count : 
       * flags : Permanent,Protected
       */
      'id' => 'SonyIDC::Main.SonyIDC:IDCPreviewLength',
      'desc' => [
        'en' => 'IDC Preview Length',
      ],
    ],
  ];

}
