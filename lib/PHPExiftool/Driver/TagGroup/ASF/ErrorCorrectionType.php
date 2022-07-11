<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ErrorCorrectionType extends AbstractTagGroup
{

  protected string $id = 'ASF:ErrorCorrectionType';

  protected string $name = 'ErrorCorrectionType';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Error Correction Type',
  ];

  protected int $count = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::StreamProperties
       * line : 2076
       * type : binary
       * writable : false
       * count : 16
       * flags : 
       */
      'id' => 'ASF::StreamProperties.ASF:ErrorCorrectionType',
      'desc' => [
        'en' => 'Error Correction Type',
      ],
    ],
  ];

}
