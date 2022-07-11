<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RMETA;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SoundFile extends AbstractTagGroup
{

  protected string $id = 'RMETA:SoundFile';

  protected string $name = 'SoundFile';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sound File',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::RMETA
       * line : 334042
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Ricoh::RMETA.RMETA:SoundFile',
      'desc' => [
        'en' => 'Sound File',
      ],
    ],
  ];

}
