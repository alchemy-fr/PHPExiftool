<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SampleFormat extends AbstractTagGroup
{

  protected string $id = 'SubIFD:SampleFormat';

  protected string $name = 'SampleFormat';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sample Format',
    'fr' => 'Format d\'échantillon',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Exif::Main
       * line : 112077
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Exif::Main.SubIFD:SampleFormat',
      'desc' => [
        'en' => 'Sample Format',
        'fr' => 'Format d\'échantillon',
      ],
    ],
  ];

}
