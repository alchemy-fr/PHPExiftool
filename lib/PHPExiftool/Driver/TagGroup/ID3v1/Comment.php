<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v1;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Comment extends AbstractTagGroup
{

  protected string $id = 'ID3v1:Comment';

  protected string $name = 'Comment';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Comment',
    'fr' => 'Commentaire',
  ];

  protected int $count = 30;

  protected array $tags = [
    0 => [
      /**
       * table_name : ID3::v1
       * line : 147605
       * type : string
       * writable : false
       * count : 30
       * flags : 
       */
      'id' => 'ID3::v1.ID3v1:Comment',
      'desc' => [
        'en' => 'Comment',
        'fr' => 'Commentaire',
      ],
    ],
  ];

}
