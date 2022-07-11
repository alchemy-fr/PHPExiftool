<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage2 extends AbstractTagGroup
{

  protected string $id = 'Nikon:PreviewImage2';

  protected string $name = 'PreviewImage2';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Preview Image 2',
  ];

  protected int $count = 0;

  protected int $flags = 6;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::NCDT
       * line : 202418
       * type : undef
       * writable : false
       * count : 
       * flags : Binary,Permanent
       */
      'id' => 'Nikon::NCDT.Nikon:PreviewImage2',
      'desc' => [
        'en' => 'Preview Image 2',
      ],
    ],
  ];

}
