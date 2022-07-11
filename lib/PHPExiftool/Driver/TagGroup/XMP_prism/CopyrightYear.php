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
class CopyrightYear extends AbstractTagGroup
{

  protected string $id = 'XMP-prism:CopyrightYear';

  protected string $name = 'CopyrightYear';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Copyright Year',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::prism
       * line : 411140
       * type : string
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'XMP::prism.XMP-prism:CopyrightYear',
      'desc' => [
        'en' => 'Copyright Year',
      ],
    ],
  ];

}
