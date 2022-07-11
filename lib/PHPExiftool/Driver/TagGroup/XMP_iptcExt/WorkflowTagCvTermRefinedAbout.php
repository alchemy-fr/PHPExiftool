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
class WorkflowTagCvTermRefinedAbout extends AbstractTagGroup
{

  protected string $id = 'XMP-iptcExt:WorkflowTagCvTermRefinedAbout';

  protected string $name = 'WorkflowTagCvTermRefinedAbout';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Workflow Tag Cv Term Refined About',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::iptcExt
       * line : 410261
       * type : string
       * writable : true
       * count : 
       * flags : Flattened
       */
      'id' => 'XMP::iptcExt.XMP-iptcExt:WorkflowTagCvTermRefinedAbout',
      'desc' => [
        'en' => 'Workflow Tag Cv Term Refined About',
      ],
    ],
  ];

}
