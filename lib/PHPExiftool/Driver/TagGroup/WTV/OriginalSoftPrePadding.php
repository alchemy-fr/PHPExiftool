<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\WTV;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalSoftPrePadding extends AbstractTagGroup
{

  protected string $id = 'WTV:OriginalSoftPrePadding';

  protected string $name = 'OriginalSoftPrePadding';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Original Soft Pre Padding',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : WTV::Metadata
       * line : 396710
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'WTV::Metadata.WTV:OriginalSoftPrePadding',
      'desc' => [
        'en' => 'Original Soft Pre Padding',
      ],
    ],
  ];

}
