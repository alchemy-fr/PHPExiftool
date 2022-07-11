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
class Title extends AbstractTagGroup
{

  protected string $id = 'MIE-Doc:Title';

  protected string $name = 'Title';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Title',
    'fr' => 'Titre',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Doc
       * line : 163657
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Doc.MIE-Doc:Title',
      'desc' => [
        'en' => 'Title',
        'fr' => 'Titre',
      ],
    ],
  ];

}
