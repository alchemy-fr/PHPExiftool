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
class Subject extends AbstractTagGroup
{

  protected string $id = 'RIFF:Subject';

  protected string $name = 'Subject';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Subject',
    'fr' => 'Sujet',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Info
       * line : 328724
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Info.RIFF:Subject',
      'desc' => [
        'en' => 'Subject',
        'fr' => 'Sujet',
      ],
    ],
  ];

}
