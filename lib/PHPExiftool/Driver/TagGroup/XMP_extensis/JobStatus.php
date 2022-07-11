<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_extensis;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JobStatus extends AbstractTagGroup
{

  protected string $id = 'XMP-extensis:JobStatus';

  protected string $name = 'JobStatus';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Job Status',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::extensis
       * line : 409124
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'XMP::extensis.XMP-extensis:JobStatus',
      'desc' => [
        'en' => 'Job Status',
      ],
    ],
  ];

}
