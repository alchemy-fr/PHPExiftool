<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MPImage;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DependentImage1EntryNumber extends AbstractTagGroup
{

  protected string $id = 'MPImage:DependentImage1EntryNumber';

  protected string $name = 'DependentImage1EntryNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Dependent Image 1 Entry Number',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MPF::MPImage
       * line : 166576
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MPF::MPImage.MPImage:DependentImage1EntryNumber',
      'desc' => [
        'en' => 'Dependent Image 1 Entry Number',
      ],
    ],
  ];

}
