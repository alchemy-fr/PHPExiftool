<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LinkedEncodedRightsExprLangID extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:LinkedEncodedRightsExprLangID';

  protected string $name = 'LinkedEncodedRightsExprLangID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Linked Encoded Rights Expr Lang ID',
  ];

  protected int $count = 0;

  protected int $flags = 64;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 409786
       * type : string
       * writable : true
       * count : 
       * flags : Flattened,List
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:LinkedEncodedRightsExprLangID',
      'desc' => [
        'en' => 'Linked Encoded Rights Expr Lang ID',
      ],
    ],
  ];

}
