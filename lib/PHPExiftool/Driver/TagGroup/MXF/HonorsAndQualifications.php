<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HonorsAndQualifications extends AbstractTagGroup
{

  protected string $id = 'MXF:HonorsAndQualifications';

  protected string $name = 'HonorsAndQualifications';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Honors And Qualifications',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169217
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:HonorsAndQualifications',
      'desc' => [
        'en' => 'Honors And Qualifications',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171042
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:HonorsAndQualifications',
      'desc' => [
        'en' => 'Honors And Qualifications',
      ],
    ],
  ];

}
