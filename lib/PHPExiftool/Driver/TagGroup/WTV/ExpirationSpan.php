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
class ExpirationSpan extends AbstractTagGroup
{

  protected string $id = 'WTV:ExpirationSpan';

  protected string $name = 'ExpirationSpan';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Expiration Span',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : WTV::Metadata
       * line : 396671
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'WTV::Metadata.WTV:ExpirationSpan',
      'desc' => [
        'en' => 'Expiration Span',
      ],
    ],
  ];

}
