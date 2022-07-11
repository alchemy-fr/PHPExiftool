<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DjVu;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubfileType extends AbstractTagGroup
{

  protected string $id = 'DjVu:SubfileType';

  protected string $name = 'SubfileType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Subfile Type',
    'fr' => 'Type du nouveau sous-fichier',
  ];

  protected int $count = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : DjVu::Form
       * line : 107378
       * type : undef
       * writable : false
       * count : 4
       * flags : 
       */
      'id' => 'DjVu::Form.DjVu:SubfileType',
      'desc' => [
        'en' => 'Subfile Type',
        'fr' => 'Type du nouveau sous-fichier',
      ],
    ],
  ];

}
