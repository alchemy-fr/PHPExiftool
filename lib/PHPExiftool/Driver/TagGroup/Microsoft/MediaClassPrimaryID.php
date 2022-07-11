<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MediaClassPrimaryID extends AbstractTagGroup
{

  protected string $id = 'Microsoft:MediaClassPrimaryID';

  protected string $name = 'MediaClassPrimaryID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Media Class Primary ID',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 175415
       * type : GUID
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:MediaClassPrimaryID',
      'desc' => [
        'en' => 'Media Class Primary ID',
      ],
    ],
  ];

}
