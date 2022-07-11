<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JFIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JFIFVersion extends AbstractTagGroup
{

  protected string $id = 'JFIF:JFIFVersion';

  protected string $name = 'JFIFVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'JFIF Version',
    'fr' => 'Version JFIF',
  ];

  protected int $count = 2;

  protected int $flags = 128;

  protected array $tags = [
    0 => [
      /**
       * table_name : JFIF::Main
       * line : 152573
       * type : int8u
       * writable : false
       * count : 2
       * flags : Mandatory
       */
      'id' => 'JFIF::Main.JFIF:JFIFVersion',
      'desc' => [
        'en' => 'JFIF Version',
        'fr' => 'Version JFIF',
      ],
    ],
  ];

}
