<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FileNumber extends AbstractTagGroup
{

  protected string $id = 'Composite:FileNumber';

  protected string $name = 'FileNumber';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'File Number',
    'fr' => 'Numéro de fichier',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Composite
       * line : 90113
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'Composite.Composite:FileNumber',
      'desc' => [
        'en' => 'File Number',
        'fr' => 'Numéro de fichier',
      ],
    ],
  ];

}
