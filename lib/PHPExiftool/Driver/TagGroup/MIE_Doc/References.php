<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Doc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class References extends AbstractTagGroup
{

  protected string $id = 'MIE-Doc:References';

  protected string $name = 'References';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'References',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Doc
       * line : 163636
       * type : string
       * writable : true
       * count : 
       * flags : List
       */
      'id' => 'MIE::Doc.MIE-Doc:References',
      'desc' => [
        'en' => 'References',
      ],
    ],
  ];

}
