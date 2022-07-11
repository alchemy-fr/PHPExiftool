<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOBI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SampleFlag extends AbstractTagGroup
{

  protected string $id = 'MOBI:SampleFlag';

  protected string $name = 'SampleFlag';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sample Flag',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::EXTH
       * line : 273877
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Palm::EXTH.MOBI:SampleFlag',
      'desc' => [
        'en' => 'Sample Flag',
      ],
    ],
  ];

}
