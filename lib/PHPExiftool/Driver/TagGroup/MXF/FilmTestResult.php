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
class FilmTestResult extends AbstractTagGroup
{

  protected string $id = 'MXF:FilmTestResult';

  protected string $name = 'FilmTestResult';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Film Test Result',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 168306
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:FilmTestResult',
      'desc' => [
        'en' => 'Film Test Result',
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 168309
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:FilmTestResult',
      'desc' => [
        'en' => 'Film Test Result',
      ],
    ],
  ];

}
