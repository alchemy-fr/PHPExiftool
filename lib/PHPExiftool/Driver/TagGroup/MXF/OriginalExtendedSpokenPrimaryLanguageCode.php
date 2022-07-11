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
class OriginalExtendedSpokenPrimaryLanguageCode extends AbstractTagGroup
{

  protected string $id = 'MXF:OriginalExtendedSpokenPrimaryLanguageCode';

  protected string $name = 'OriginalExtendedSpokenPrimaryLanguageCode';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Original Extended Spoken Primary Language Code',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172019
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:OriginalExtendedSpokenPrimaryLanguageCode',
      'desc' => [
        'en' => 'Original Extended Spoken Primary Language Code',
      ],
    ],
  ];

}
