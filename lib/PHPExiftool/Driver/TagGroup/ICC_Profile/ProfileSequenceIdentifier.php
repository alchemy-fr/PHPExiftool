<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_Profile;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProfileSequenceIdentifier extends AbstractTagGroup
{

  protected string $id = 'ICC_Profile:ProfileSequenceIdentifier';

  protected string $name = 'ProfileSequenceIdentifier';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Profile Sequence Identifier',
  ];

  protected int $count = 0;

  protected int $flags = 2;

  protected array $tags = [
    0 => [
      /**
       * table_name : ICC_Profile::Main
       * line : 146883
       * type : ?
       * writable : false
       * count : 
       * flags : Binary
       */
      'id' => 'ICC_Profile::Main.ICC_Profile:ProfileSequenceIdentifier',
      'desc' => [
        'en' => 'Profile Sequence Identifier',
      ],
    ],
  ];

}
