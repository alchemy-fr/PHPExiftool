<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Comment extends AbstractTagGroup
{

  protected string $id = 'Ricoh:Comment';

  protected string $name = 'Comment';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Comment',
    'fr' => 'Commentaire',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::AVI
       * line : 332160
       * type : ?
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Ricoh::AVI.Ricoh:Comment',
      'desc' => [
        'en' => 'Comment',
        'fr' => 'Commentaire',
      ],
    ],
  ];

}
