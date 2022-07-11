<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Text extends AbstractTagGroup
{

  protected string $id = 'Real:Text';

  protected string $name = 'Text';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Text',
    'fr' => 'Texte',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Real::Metafile
       * line : 330826
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Real::Metafile.Real:Text',
      'desc' => [
        'en' => 'Text',
        'fr' => 'Texte',
      ],
    ],
  ];

}
