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
class ProviderRating extends AbstractTagGroup
{

  protected string $id = 'WTV:ProviderRating';

  protected string $name = 'ProviderRating';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Provider Rating',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : WTV::Metadata
       * line : 396558
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'WTV::Metadata.WTV:ProviderRating',
      'desc' => [
        'en' => 'Provider Rating',
      ],
    ],
  ];

}
