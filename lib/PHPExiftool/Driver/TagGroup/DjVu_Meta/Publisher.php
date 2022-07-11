<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DjVu_Meta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Publisher extends AbstractTagGroup
{

  protected string $id = 'DjVu-Meta:Publisher';

  protected string $name = 'Publisher';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Publisher',
    'fr' => 'Editeur',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DjVu::Meta
       * line : 107805
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DjVu::Meta.DjVu-Meta:Publisher',
      'desc' => [
        'en' => 'Publisher',
        'fr' => 'Editeur',
      ],
    ],
  ];

}
