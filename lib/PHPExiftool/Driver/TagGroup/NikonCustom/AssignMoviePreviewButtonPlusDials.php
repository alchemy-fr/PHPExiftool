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
class AssignMoviePreviewButtonPlusDials extends AbstractTagGroup
{

  protected string $id = 'NikonCustom:AssignMoviePreviewButtonPlusDials';

  protected string $name = 'AssignMoviePreviewButtonPlusDials';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Assign Movie Preview Button Plus Dials',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : NikonCustom::SettingsD5
       * line : 219658
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD5.NikonCustom:AssignMoviePreviewButtonPlusDials',
      'desc' => [
        'en' => 'Assign Movie Preview Button Plus Dials',
      ],
    ],
    1 => [
      /**
       * table_name : NikonCustom::SettingsD500
       * line : 222118
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD500.NikonCustom:AssignMoviePreviewButtonPlusDials',
      'desc' => [
        'en' => 'Assign Movie Preview Button Plus Dials',
      ],
    ],
    2 => [
      /**
       * table_name : NikonCustom::SettingsD850
       * line : 234031
       * type : int8u
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'NikonCustom::SettingsD850.NikonCustom:AssignMoviePreviewButtonPlusDials',
      'desc' => [
        'en' => 'Assign Movie Preview Button Plus Dials',
      ],
    ],
  ];

}
