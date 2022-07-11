<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ISO;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AbstractFileName extends AbstractTagGroup
{

  protected string $id = 'ISO:AbstractFileName';

  protected string $name = 'AbstractFileName';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Abstract File Name',
  ];

  protected int $count = 36;

  protected array $tags = [
    0 => [
      /**
       * table_name : ISO::PrimaryVolume
       * line : 152406
       * type : string
       * writable : false
       * count : 36
       * flags : 
       */
      'id' => 'ISO::PrimaryVolume.ISO:AbstractFileName',
      'desc' => [
        'en' => 'Abstract File Name',
      ],
    ],
  ];

}
