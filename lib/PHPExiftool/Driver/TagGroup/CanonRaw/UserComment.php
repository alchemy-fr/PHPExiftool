<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UserComment extends AbstractTagGroup
{

  protected string $id = 'CanonRaw:UserComment';

  protected string $name = 'UserComment';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'User Comment',
    'fr' => 'Commentaire utilisateur',
  ];

  protected int $count = 256;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : CanonRaw::Main
       * line : 78658
       * type : string
       * writable : true
       * count : 256
       * flags : Permanent
       */
      'id' => 'CanonRaw::Main.CanonRaw:UserComment',
      'desc' => [
        'en' => 'User Comment',
        'fr' => 'Commentaire utilisateur',
      ],
    ],
  ];

}
