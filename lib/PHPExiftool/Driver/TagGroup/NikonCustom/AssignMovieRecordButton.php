<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AssignMovieRecordButton extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AssignMovieRecordButton';

  protected string $name = 'AssignMovieRecordButton';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Assign Movie Record Button',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD4
       * line : 216459
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD4.NikonCustom:AssignMovieRecordButton',
      'desc' => [
        'en' => 'Assign Movie Record Button',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD810
       * line : 231607
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD810.NikonCustom:AssignMovieRecordButton',
      'desc' => [
        'en' => 'Assign Movie Record Button',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsZ9
       * line : 237083
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent,Unknown
       */
      'id' => 'NikonCustom::SettingsZ9.NikonCustom:AssignMovieRecordButton',
      'desc' => [
        'en' => 'Assign Movie Record Button',
      ],
    ],
  ];

}
