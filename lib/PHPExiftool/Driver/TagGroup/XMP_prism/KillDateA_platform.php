<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class KillDateA_platform extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:KillDateA-platform';

  protected string $name = 'KillDateA-platform';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Kill Date A-platform',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 411271
       * type : string
       * writable : true
       * count : 
       * flags : Avoid,Flattened
       */
      'id' => 'XMP::prism.XMP-prism:KillDateA-platform',
      'desc' => [
        'en' => 'Kill Date A-platform',
      ],
    ],
  ];

}
