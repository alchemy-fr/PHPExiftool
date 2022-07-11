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
class SignType extends AbstractTagGroup
{

  protected string $id = 'RMETA:SignType';

  protected string $name = 'SignType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Sign Type',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Ricoh::RMETA
       * line : 334028
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Ricoh::RMETA.RMETA:SignType',
      'desc' => [
        'en' => 'Sign Type',
      ],
    ],
  ];

}
