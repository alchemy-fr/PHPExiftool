<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UserComment extends AbstractTagGroup
{

  protected string $id = 'RIFF:UserComment';

  protected string $name = 'UserComment';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'User Comment',
    'fr' => 'Commentaire utilisateur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Exif
       * line : 328262
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Exif.RIFF:UserComment',
      'desc' => [
        'en' => 'User Comment',
        'fr' => 'Commentaire utilisateur',
      ],
    ],
  ];

}
